<?php
//Variables that hold connection informaiton
$server = "localhost";
$username = "root";
$password = ""; //Variables set here!

// Change the database name as required
$dbname = "musiconline";

//Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);
?>