<?php
session_start();
if(isset($_POST['pass_but']) && isset($_SESSION['user_id'])) {
    require 'connection.php';  
    $mobile_flag = false;
    $flight_id = $_POST['flight_id'];
    $passengers = $_POST['passengers'];
    $mob_len = count($_POST['mobile']);
    for($i=0;$i<$mob_len;$i++) {
        if(strlen($_POST['mobile'][$i]) !== 10) {
            $mobile_flag = true;
            break;            
        }
    }
    if($mobile_flag) {
        header('Location:2.passform.php?error=moblen');
        exit();         
    }
    $date_len = count($_POST['date']);
    for($i=0;$i<$date_len;$i++) {        
        $date_mnth = (int)substr($_POST['date'][$i],5,2);
        $flag = false;
        if($date_mnth > (int)date('m')){
          $flag = true;
        } else if($date_mnth == (int)date('m')){
          if((int)substr($_POST['date'][$i],8,2) >= (int)date('d')) {
            $flag = true;            
          } 
        }  
        if($flag) {
            header('Location: 2.passform.php?error=invdate');
            exit();    
            break;
        }      
    }        
    $stmt1 = mysqli_stmt_init($link);
$sql1 = 'SELECT * FROM passenger_profile';
if (!mysqli_stmt_prepare($stmt1, $sql1)) {
    header('Location: 2.passform.php?error=sqlerror');
    exit();
} else {
    $stmt2 = mysqli_stmt_init($link);
    $sql2 = 'SELECT * FROM passenger_profile WHERE user_id = ? AND flight_id = ?';
    if (!mysqli_stmt_prepare($stmt2, $sql2)) {
        header('Location: 2.passform.php?error=sqlerror');
        exit();
    } else {
        mysqli_stmt_bind_param($stmt2, 'ii', $_SESSION['user_id'], $flight_id);
        mysqli_stmt_execute($stmt2);
        $result = mysqli_stmt_get_result($stmt2);
        $flag = false;
        while ($row = mysqli_fetch_assoc($result)) {
            $pass_id = $row['passenger_id'];
        }
    }
}


    if(is_null($pass_id)) {
        $pass_id = 0;
        $stmt = mysqli_stmt_init($link);
        $sql = 'ALTER TABLE passenger_profile AUTO_INCREMENT = 1 ';
        $stmt = mysqli_stmt_init($link);
        if(!mysqli_stmt_prepare($stmt,$sql)) {
            header('Location: 2.passform.php?error=sqlerror');
            exit();            
        } else {         
            mysqli_stmt_execute($stmt);
        }        
    }
    $stmt = mysqli_stmt_init($link);
    $flag = false;
    for($i=0;$i<$date_len;$i++) {
        $sql = 'INSERT INTO passenger_profile (user_id, mobile, dob, f_name, m_name, l_name, flight_id) VALUES (?, ?, ?, ?, ?, ?, ?)';
          
        if(!mysqli_stmt_prepare($stmt,$sql)) {
            header('Location: 2.passform.php?error=sqlerror');
            exit();            
        } else {
            mysqli_stmt_bind_param($stmt,'iissssi',$_SESSION['user_id'],
                $_POST['mobile'][$i],$_POST['date'][$i],$_POST['firstname'][$i],
                $_POST['midname'][$i],$_POST['lastname'][$i],$flight_id);                           
            mysqli_stmt_execute($stmt);  
            $flag = true;        
        }
    }   
    if($flag) {
        $_SESSION['flight_id'] = $flight_id;
        $_SESSION['class'] = $_POST['class'];
        $_SESSION['passengers'] = $passengers;
        $_SESSION['price'] = $_POST['price'];
        $_SESSION['type'] = $_POST['type'];
        $_SESSION['ret_date'] = $_POST['ret_date'];
        $_SESSION['pass_id'] = $pass_id+1;
        header('Location: 2.payment.php');
        exit();          
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);    

} else {
    header('Location: 2.passform.php');
    exit();  
}