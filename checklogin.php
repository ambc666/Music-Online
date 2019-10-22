<?php include "connect.php"; ?>
<?php

ob_start(); //Output buffering start
session_start();


if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); 
    
    
    $query = "SELECT * FROM public_user WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    
    $dbpassword = $row['password']; //Password retrieved from the database (hashed)
    
    if(password_verify($password, $dbpassword)){
        $_SESSION['email'] = $row['first_name']; //If login correct then display this info.
        header("location:logincomplete.php");
    }
    
    else{
        header("location:loginfailed.php"); //Else redirect to error page.
    }
        
}

ob_end_flush(); //Output buffering end
?>