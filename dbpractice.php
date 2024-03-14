<?php
    $connect = new mysqli("db", "root", "example", "jbustore_db");
        if($connect->connect_errno)
            {
                die('Could not connect: ' . $connect->connect_errno);
            }  
?>