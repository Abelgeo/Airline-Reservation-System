<?php

include('connection.php');

if(!$link){
    die("Connection Failed");
}

$sql = "SELECT * FROM flight";
                $query = $link->query($sql);

                echo "$query->num_rows";
?>