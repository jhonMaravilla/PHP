<?php
   ob_start();
   require_once 'dbLogin.php';
   
   $username = $_REQUEST['username'];
   $password = $_REQUEST['password'];
   
   // if username Exitst
   $query = "Select username from tblUsers where username = '$username'";
   $result = mysqli_query($conn, $query);
   
   if(mysqli_num_rows($result) > 0){
       header('location:register.php?result=userexists');
   }
   else{
       //adding of user in db
       $query = "Insert into tblUsers (username,password) values ('$username', '$password')";
       $result = mysqli_query($conn, $query);
        if($result = 1){
            header('location:index.php?result2=success');
        }
        else{
            header('location:register.php?result=fail');
        }
   }
?>
