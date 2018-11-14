<?php
    $host = 'localhost';
    $user = 'maravijh_admin';
    $password = 'Maravijhon.01';
    $dbName = 'maravijh_assignment5db';
    
    $conn = mysqli_connect($host, $user, $password, $dbName);
    
    if(empty($conn)){
        die("Connection failed: " . mysqli_error($conn));
    }

