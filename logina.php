<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
    <title>"Music Online Admin Login"</title>
    <meta name="description" content="Admin login page"> 
    <meta name="keywords" content="admin only, ">
</head>
<body>
<main> 
<!--Header starts here -->
<?php include ("header.php"); ?>
<!--Header ends here -->
    
    <div class="row"><!--Row 1-->
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