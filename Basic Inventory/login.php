<?php
    ob_start();
    session_start();
    require_once 'dbLogin.php';
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    $query = "Select username from tblUsers where username='$username' and password = '$password'";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        header('location:products.php');
    } 
    else{
        header('location:index.php?result=fail');
    }
?>
