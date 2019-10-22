<?php include "connect.php"; ?>

<?php

session_start();
ob_start();

//Login check - If the session is not registered
//redirect back to the main login page.

if(!isset($_SESSION['username'])){
    header ('location:logina.php');
}
ob_end_flush();
?>

<!doctype html>
<html>
    <head>
<?php include("head.php"); ?>
        <title>Music Online Admin Login Successful</title>
        <meta http-equiv="refresh" content="3;url=myaccountadmin.php" />
    </head>
    <body>
        <main>
<!--Header starts here -->
<?php include ("header.php"); ?>
<!--Header ends here -->
        <div class="row">
            <div class="col-8 col-lg-4 mx-auto text-center">
                <h3>Hi <?php echo $_SESSION['username'] ?>,</h3>
                <h3>Thank You for Logging In.</h3>
                <br>
                <p>You will be redirected to my account in 3 seconds or <a href="myaccountadmin.php" id="reDirectLink">click here</a></p>
            </div>
        </div>
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>