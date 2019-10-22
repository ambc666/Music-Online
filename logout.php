<?php
session_start();
session_destroy();
header("location:login.php");    

/**************************************
Self explanatory - Destroy current session and log me out.
**************************************/
?>