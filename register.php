<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
    <title>"Music Online Registration"</title>
    <meta name="description" content="Register an account"> 
    <meta name="keywords" content="musiconline, registration, email, create,">
</head>
<body>
<main> 
<!--Header starts here -->
<?php include ("header.php"); ?>
<!--Header ends here -->
    
    <div class="row">
		<div class="col-8 col-lg-4 mx-auto text-center" id="publicRegister">
            <h3 id="accountHead">Create an Account</h3>
    <form class="backform" action="adminregistration.php" method="post" autocomplete="off">
        
        <div class="form-group">
            <label class="text" for="first_name">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required> 
        </div>
        
        <div class="form-group">
            <label class="text" for="surname">Surname:</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Second name" required> 
        </div>
        
        <div class="form-group">
            <label class="text" for="telephone">Telephone No:</label>
            <input type="number" class="form-control" id="telephone" name="telephone" placeholder="Telephone no." required> 
        </div>
        <div class="form-group">
            <label class="text" for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required> 
        </div>
        
        <div class="form-group">
            <label class="text" for="email">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required> 
        </div>
        
        <input type="submit" name="register_form" class="btn btn-info" value="Subscribe"> 
    </form>
            
        </div>
    </div>  
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>