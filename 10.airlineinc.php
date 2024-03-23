<?php
if(isset($_POST['air_but'])) {
    require 'connection.php'; 
    $airline = $_POST['airline'];
    $seats = $_POST['seats'];
    $sql = 'INSERT INTO airline (name,seats) VALUES (?,?)';
    $stmt = mysqli_stmt_init($link);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        header('Location: 9.adminhome.php?error=sqlerror');
        exit();            
    } else {
        mysqli_stmt_bind_param($stmt,'si',$airline,$seats);            
        mysqli_stmt_execute($stmt); 
        header('Location: 9.adminhome.php');
        exit();       
        mysqli_stmt_close($stmt);
        mysqli_close($conn);          
    }

} else {
    header('Location:9.adminhome.php');
    exit();  
}
