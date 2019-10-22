<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
    <title>"Music Online Login Failed"</title>
    <meta name="description" content="Login check failed"> 
    <meta name="keywords" content="login details, username, register,">
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
            <h4 id="errorText">Wrong Email or Password Entered.</h4>
            <br>
            <p id="errorText">Please try again below.</p>
        </div>
    </div>
    <div class="row"><!--Row 2-->
        <div class="col-10 col-lg-6 mx-auto" id="publicLogin">
            <h3>Please Sign In</h3>   
        
            <form class="backform" action="checklogin.php" method="post" autocomplete="off"> 
                <div class="form-group">
                    <label class="text" for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Please enter your email." required> 
                </div> 
                
                <div class="form-group">
                    <label class="text" for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Please enter your password" required> 
                </div> 
                
                <input type="submit" class="btn btn-info" name="login_form" value="Login">
            </form>
        </div>
    </div>  
    
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>