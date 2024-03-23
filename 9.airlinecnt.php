<?php

include('connection.php');

if(!$link){
    die("Connection Failed");
}

$sql = "SELECT * FROM airline";
                $query = $link->query($sql);

                echo "$query->num_rows";
?>