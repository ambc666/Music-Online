<?php include "connect.php"; ?>
<?php

ob_start(); //Output buffering start
session_start();


if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); 
    
    
//    $query = "SELECT * FROM public_user WHERE email='$email'";
    
    $query = "SELECT * FROM admin WHERE username='$username'";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    
    $dbpassword = $row['password']; //Password retrieved from the database (hashed)
    
    if(password_verify($password, $dbpassword)){
        $_SESSION['username'] = $row['first_name']; //If login correct then display this info.
        header("location:logincompletea.php");
    }
    
    else{
        header("location:loginfaileda.php"); //Else redirect to this page.
    }
        
}

ob_end_flush(); //Output buffering end
?>