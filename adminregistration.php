<?php include "connect.php"; ?>

<?php
session_start();  //Declare empty variables for error prevention
$first_name = '';
$surname = '';
$telephone = '';
$email = '';
$password = '';

//Security - escaped special characters to prevent malicious code
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
$hash = password_hash($password, PASSWORD_ARGON2I); // Argon2 default security
    //Defaults are memory_cost 1024 bytes, time_cost 2, threads 2,

$sql = "INSERT INTO public_user (first_name, surname, telephone, email, password)
VALUES ('$first_name', '$surname', '$telephone','$email', '$hash')";

    
$query = mysqli_query($conn, $sql); 

if ($query){
    $_SESSION['registered'] = 'YES';
    $_SESSION['user'] = htmlspecialchars($first_name);
    header ('Location: ./reglogin.php'); // Redirect to a login page.
}
else{
    echo 'Error: ' . $sql . "<br>" . mysqli_error($conn); // Error if fails instead of redirect.
}
    
} // This closes the if function.

?> 