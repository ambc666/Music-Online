<?php include "connect.php"; ?>

<?php

session_start();
ob_start();

//Login check - If the session is not registered
//redirect back to the main login page.

if(!isset($_SESSION['email'])){
    header ('location:login.php');
}
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
    <title>"Music Online Home"</title>
    <meta name="description" content="Music Online home page where can buy and sell music."> 
    <meta name="keywords" content="musiconline, music, buy, sell, view music, sign up, music for every mood">
</head>
<body>
<main> 
<!--Header starts here -->
<?php include ("header.php"); ?>
<!--Header ends here -->
    
    <div class="row"><!--Row 1-->
		<div class="col-11 col-lg-6 mx-auto">
        <h2 id="myAccText">My Account</h2>
            <h4 id="myAccText">Hi <?php echo $_SESSION['email'] ?>,</h4>
            <br>
            <p id="myAccText">Make changes to your account below.</p>
        </div>
    </div>
    
    <div class="row"><!--Row 1-->
		<div class="col-10 col-lg-2 mx-auto" id="myAccChoices">
        <ul>
            <li ><a id="myAccHyperLinks" href="fileuploadform.php">Add New File</a></li>
            <li><a id="myAccHyperLinks" href="updatelist.php">Update or Delete</a></li>
            <li><a id="myAccHyperLinks" href="logout.php">Logout Here</a></li>
        </ul>  
        </div>
    </div>
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>