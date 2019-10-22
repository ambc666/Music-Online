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
    
    if (isset($_POST['update'])){
        $id=$_POST['id']; 
        $artist=$_POST['artist']; 
        $album=$_POST['album'];  
        $year=$_POST['year']; 
        $genre=$_POST['genre']; 
        $album_cover=$_POST['album_cover'];
        $date_added=$_POST['date_added'];
        $price=$_POST['price'];
        
        $query = "UPDATE vinyl SET
        
        id = '{$id}',  
        artist = '{$artist}',
        album = '{$album}',
        year = '{$year}',
        genre = '{$genre}',
        album_cover = '{$album_cover}',
        date_added = '{$date_added}',
        price = '{$price}' WHERE id='{$id}' "; // This links to the form
            
        $result = mysqli_query($conn, $query);
        redirect_to('updatelist.php');      
    }
    ?>


<?php include("js.php"); ?>
</body>
</html>