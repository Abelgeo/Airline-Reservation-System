<?php
//Connect to the database
$link = mysqli_connect("localhost", "notes", "Abelgeorge@5735", "airlinereservation");
if(mysqli_connect_error()){
    die("ERROR: Unable to connect" . mysqli_connect_error());
}
//create tables if they haven't been yet
$sql = "CREATE TABLE IF NOT EXISTS `users` (
    `user_id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(30) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(64) NOT NULL,
    `activation` char(32) DEFAULT NULL,
    `activation2` char(32) DEFAULT NULL,
    PRIMARY KEY (`user_id`),
    UNIQUE KEY `user_id` (`user_id`)
   ); ";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">Error running the query!</div>';
       echo mysqli_error($link);
       exit;
   }
//create tables if they haven't been yet
$sql = "CREATE TABLE IF NOT EXISTS `admin` (
    `admin_id` int(11) NOT NULL AUTO_INCREMENT,
    `admin_username` varchar(30) NOT NULL,
    `admin_email` varchar(50) NOT NULL,
    `admin_password` varchar(64) NOT NULL,
    PRIMARY KEY (`admin_id`),
    UNIQUE KEY `admin_id` (`admin_id`)
   ); ";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">Error running the query!</div>';
       echo mysqli_error($link);
       exit;
   }
   //create tables if they haven't been yet
$sql = "CREATE TABLE IF NOT EXISTS `cities` (
    `city` varchar(30) NOT NULL,
    `city_id` int(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`city_id`),
    UNIQUE KEY `city_id` (`city_id`)
   ); ";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">Error running the query!</div>';
       echo mysqli_error($link);
       exit;
   }
//create tables if they haven't been yet
$sql = "CREATE TABLE IF NOT EXISTS `feedback` (
    `feed_id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(50) NOT NULL,
    `q1` varchar(250),
    `q2` varchar(20),
    `q3` varchar(250),
    `rate` int(11),
    PRIMARY KEY (`feed_id`),
    UNIQUE KEY `feed_id` (`feed_id`)
   ); ";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">Error running the query!</div>';
       echo mysqli_error($link);
       exit;
   }
 //create tables if they haven't been yet
$sql = "CREATE TABLE IF NOT EXISTS `airline` (
    `airline_id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `seats` int(11),
    PRIMARY KEY (`airline_id`),
    UNIQUE KEY `name` (`name`)
   ); ";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">Error running the query!</div>';
       echo mysqli_error($link);
       exit;
   }
   $sql = "CREATE TABLE IF NOT EXISTS `rememberme` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `authentificator1` char(20) NOT NULL,
    `f2authentificator2` char(64) NOT NULL,
    `user_id` int(11) NOT NULL,
    `expires` datetime NOT NULL,
    PRIMARY KEY (`id`)
   );";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">Error running the query!</div>';
       echo mysqli_error($link);
       exit;
   }
   $sql = "CREATE TABLE IF NOT EXISTS `forgotpassword` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,
    `rkey` char(32) NOT NULL,
    `time` int(11) NOT NULL,
    `status` varchar(7) NOT NULL,
    PRIMARY KEY (`id`)
   );";
   $result = mysqli_query($link, $sql);
   if(!$result){
       echo '<div class="alert alert-danger">Error running the query!</div>';
       echo mysqli_error($link);
       exit;
   }   
?>