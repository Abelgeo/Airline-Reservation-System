<?php
//<!-- Start session -- >
session_start();
//<!-- Connect to the database -- >
include("connection.php");

//<!-- Check user inputs -- >
//    <!-- Define error messages -- >
$missingusername = '<p><strong>Please enter a username!</strong></p>';
$missingemail = '<p><strong>Please enter your email!</strong></p>';
$missingpassword = '<p><strong>Please enter your Password!</strong></p>';

$email = "";
$password = "";
$errors = '';

//    <!-- Get email and password -- >
//    <!-- Store errors in errors variable -- >
if(empty($_POST["adminusername"])){
    $errors .= $missingusername;  
}else{
    $username = filter_var($_POST["adminusername"], FILTER_SANITIZE_STRING);
}
if(empty($_POST["adminemail"])){
    $errors .= $missingemail;
}else{
    $email = filter_var($_POST["adminemail"], FILTER_SANITIZE_EMAIL);   
}
if(empty($_POST["adminpassword"])){
    $errors .= $missingpassword;
}else{
    $password = filter_var($_POST["adminpassword"], FILTER_SANITIZE_STRING);   
}
//    <!-- If there are any errors -- >
if($errors){
    //        <!-- print error message -- >
    $resultmessage = '<div class="alert alert-danger">' . $errors . '</div>';
    echo $resultmessage;
}else{
    //    <!-- else: No errors -- >
    //<!-- Prepare variables for the query >
    $username = mysqli_real_escape_string($link, $username);
        $email = mysqli_real_escape_string($link, $email);
        $password = mysqli_real_escape_string($link, $password);      
//        <!-- Run query: Check combinaton of email & password exists -- >
$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query</div>';
    exit;
}
//        <!-- If email & password don't match print error -- >
$count = mysqli_num_rows($result);
if($count !== 1){
    echo '<div class="alert alert-danger">Wrong Username or password.</div>';
}else{
    //        <!-- else -- >
//            <!-- log the user in: Set session variables -- >
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['id']=$row['id'];
    $_SESSION['username']=$row['username'];
    $_SESSION['email']=$row['email'];
    //            <!-- If remember me is not checked -- >
//                <!-- print "success" -- >
echo "success";
    
}
}

//                <!-- If query unsuccessful -- >
//                    <!-- print error -- >
//                <!-- else -- >
//                    <!-- print "success" -- >
                    ?>