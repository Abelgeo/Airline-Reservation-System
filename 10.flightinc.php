<?php
session_start();
if(isset($_POST['flight_but']) and isset($_SESSION['id'])) {
    require 'connection.php';
    $source_date = $_POST['source_date'];
    $source_time = $_POST['source_time'];
    $dest_date = $_POST['dest_date'];
    $dest_time = $_POST['dest_time'];
    $dep_city = $_POST['dep_city'];
    $arr_city = $_POST['arr_city'];
    $price = $_POST['price'];
    $air_id = $_POST['airline_name'];
    $dura = $_POST['dura'];

    if($dep_city===$arr_city || $arr_city==='To' || $arr_city==='From') {
      header('Location: 9.addflight.php?error=same');
      exit();
    }
    $dest_date_len = strlen($dest_date);
    $dest_time_len = strlen($dest_time);
    $source_date_len = strlen($source_date);
    $source_time_len = strlen($source_time);

    $dest_date_str = '';
    for($i=$dest_date_len-2;$i<$dest_date_len;$i++) {
      $dest_date_str .= $dest_date[$i];
    }
    $source_date_str = '';
    for($i=$source_date_len-2;$i<$source_date_len;$i++) {
      $source_date_str .= $source_date[$i];
    }
    $dest_time_str = '';
    for($i=0;$i<$dest_time_len-3;$i++) {
      $dest_time_str .= $dest_time[$i];
    }
    $source_time_str = '';
    for($i=0;$i<$source_time_len-3;$i++) {
      $source_time_str .= $source_time[$i];
    }
    $dest_date_str = (int)$dest_date_str;
    $source_date_str = (int)$source_date_str;
    $dest_time_str = (int)$dest_time_str;
    $source_time_str = (int)$source_time_str;

    $time_source = $source_time.':00';
    $time_dest = $dest_time.':00';
    $arrival = $dest_date.' '.$time_dest;
    $departure = $source_date.' '.$time_source;

    $dest_mnth = (int)substr($dest_date,5,2);
    $src_mnth = (int)substr($source_date,5,2);
    $flag = false;
    if($dest_mnth > $src_mnth){
      $flag = true;
    } else if($dest_mnth == $src_mnth){
      if($dest_date_str > $source_date_str) {
        $flag = true;
      } else if($dest_date_str == $source_date_str) {
        if($dest_time_str > $source_time_str){
          $flag = true;
        }
      }
    }

    if($flag == false) {
      header('Location: 9.addflight.php?error=destless');
      exit();
    } else {
      $sql = "SELECT * FROM airline WHERE airline_id =?";
      $stmt = mysqli_stmt_init($link);
      mysqli_stmt_prepare($stmt,$sql);
      mysqli_stmt_bind_param($stmt,'i',$air_id);            
      mysqli_stmt_execute($stmt);      
      $result = mysqli_stmt_get_result($stmt);    
      mysqli_stmt_close($stmt);
      if($row = mysqli_fetch_assoc($result)) {
        $seats = $row['seats'];
        $airline_name = $row['name'];
        $sql = "INSERT INTO flight(id,arrivale,departure,Destination,source,
          airline,Seats,duration,Price,status,issue) VALUES (?,?,?,
          ?,?,?,?,?,?,'','')";
          
        $stmt = mysqli_stmt_init($link);
        if(!mysqli_stmt_prepare($stmt,$sql)) {
          header('Location: 9.addflight.php?error=sqlerr1');
          exit();          
        } else {      
          $id = $_SESSION['id'];  
          mysqli_stmt_bind_param($stmt,'isssssisi',$id,$arrival,$departure,$arr_city
            ,$dep_city,$airline_name,$seats,$dura,$price);            
          mysqli_stmt_execute($stmt); 
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);
        header('Location: 9.addflight.php?flight=success');
        exit();
      } else {
        header('Location: 9.addflight.php?error=sqlerr');
        exit();
      }
    }
} else {
    header('Location: 9.adminhome.php');
    exit();
}
