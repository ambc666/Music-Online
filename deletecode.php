<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?> 
    <title>Product</title> 
    <meta name="description" content="#"> 
    <meta name="keywords" content="#"> 

</head>
<body>

    <?php 
    function redirect_to($location = NULL){
        if ($location != NULL){
            header("Location: {$location}");
        }
    }
    
    if (isset($_POST['delete'])){
        $id=$_POST['id']; 
        $artist=$_POST['artist']; 
        $album=$_POST['album'];  
        $year=$_POST['year']; 
        $genre=$_POST['genre']; 
        $album_cover=$_POST['album_cover'];
        $date_added=$_POST['date_added'];
        $price=$_POST['price'];
        
        $query = "DELETE FROM vinyl WHERE id ='{$id}' LIMIT 1"; 
        
        $result = mysqli_query($conn, $query);
        redirect_to('updatelist.php');      
    }
    ?>
    
</body>
</html>