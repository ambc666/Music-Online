<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
    <title>"Music Online Login"</title>
    <meta name="description" content="Login to buy and sell music"> 
    <meta name="keywords" content="login details, username, create account,">
</head>
<body>
<main> 
<!--Header starts here -->
<?php include ("header.php"); ?>
    <!--Header ends here -->
    <div class="row"><!--Row 1-->
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