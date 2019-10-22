<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
    <title>"Music Online Admin Login Failed"</title>
    <meta name="description" content="Admin Login check failed"> 
    <meta name="keywords" content="admin only, failed details, try again">
</head>
<body>
<main> 
<!--Header starts here -->
<?php include ("header.php"); ?>
<!--Header ends here -->
    <div class="row justify-content-center"><!--Row 1-->
        <div class="col-2">
            <img src="img/error.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-8 col-lg-4">
            <h4 id="errorText">Wrong Username or Password Entered.</h4>
            <br>
            <p id="errorText">Please try again below.</p>
            <p id="errorText">If you are a public user please click <a href="login.php">here</a> to login.</p>
        </div>
    </div>
    <div class="row"><!--Row 2-->
        <div class="col-10 col-lg-6 mx-auto" id="adminLogin">
            <h3>Admin Sign In Only</h3>   
    <form class="backform" action="checklogina.php" method="post" autocomplete="off">         
        <div class="form-group">
            <label class="text" for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required> 
        </div>
        <div class="form-group">
            <label class="text" for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required> 
        </div>
        <input type="submit" class="btn btn-warning" name="login_form" value="Login">
    </form>
        </div>
    </div>  
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>