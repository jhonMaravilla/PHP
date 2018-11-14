<?php
    ob_start();
    session_start();
    
    if(empty($_SESSION['username'])){
        header('location:index.php');
    }

