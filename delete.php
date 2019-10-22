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
<main>
    <?php include ("header.php"); ?>
    
    <?php $id = (isset($_GET["id"]) && !empty($_GET["id"]) ? $_GET["id"] : "");
    //Get ID from the URL
    
    
    $query = "SELECT * FROM vinyl WHERE id = $id";
    
        $result = mysqli_query($conn, $query);
    
        while ($row = mysqli_fetch_array($result)){ 
        $id=$row['id']; 
        $artist=$row['artist']; 
        $album=$row['album'];  
        $year=$row['year']; 
        $genre=$row['genre']; 
        $album_cover=$row['album_cover'];
        $date_added=$row['date_added'];
        $price=$row['price'];
        }
    ?>
    
        <div class="row">
        <div class="col-10 col-lg-6 mx-auto text-center">
            <h3>Delete Record</h3>  
    
            <form action="deletecode.php" method="post" >
                <div class="form-group">
                <label class="text">ID:</label>
                <input id="updateFormInput" type="text" name="id" value="<?php echo "$id";?>" readonly>
                </div>
           
                <div class="form-group">
                <label class="text">Arist:</label>
                <input id="updateFormInput" type="text" name="artist" value="<?php echo "$artist";?>">
                </div>

                <div class="form-group">
                <label class="text">Album:</label>
                <input id="updateFormInput" type="text" name="album" value="<?php echo "$album";?>">
                </div>
                                    
                <div class="form-group">
                <label class="text">Year:</label>
                <input id="updateFormInput" type="number" name="year" value="<?php echo "$year";?>">
                </div>
                                    
                <div class="form-group">
                    <label class="text">Genre:</label>
                <input id="updateFormInput" type="text" name="genre" value="<?php echo "$genre";?>">
                </div>
                    
                <div class="form-group">
                <label class="text">Price:</label>
                <input id="updateFormInput" type="number" name="price" value="<?php echo "$price";?>">
                </div>
                    
                <div class="form-group">
                <label class="text">Date Added:</label>
                <input id="updateFormInput" type="text" name="date_added" value="<?php echo "$date_added";?>">
                </div>
                
                <div class="form-group">                    
                <label class="text">Image Directory:</label>
                <input id="updateFormInput" type="text" name="album_cover" value="<?php echo "$album_cover";?>">
                </div>
            
                <input type="submit" name="delete" class="btn btn-info" value="Delete Record">

            </form>    
            </div>
    </div>
</main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
</body>
</html>