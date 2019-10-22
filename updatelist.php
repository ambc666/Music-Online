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
        
        <div class="row">
            <div class="col-12 text-center">
                <h2>Update or Delete Records</h2>
            </div>
        </div>
    
        <div class="row" id="searchTable">
            <div class="col-8 mx-auto text-center">
                
    <?php 
    
    $query = "SELECT * FROM vinyl";
    $result = mysqli_query($conn, $query);
    
    while($row=mysqli_fetch_array($result)){
        $id=$row['id'];
        $artist=$row['artist']; 
        $album=$row['album'];  
        $year=$row['year']; 
        $genre=$row['genre']; 
        $album_cover=$row['album_cover'];
        $date_added=$row['date_added'];
        $price=$row['price'];
        ?>
                
    <div class='table-responsive-md'>
    <table class='table table-gray-dark'>
        <tr>
        <th>ID</th>
        <th>Cover</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Price</th>
        <th>Date Added</th>
        </tr>
        <tr>
    <?php
        echo "<tr>";
        echo "<td>" .$row['id'] . "</td>";
        echo "<td><img id='albumCoverSearch' src=".$row['album_cover']."></a></td>"; //Uses thumb images.
        echo "<td>" .$row['artist'] . "</td>";
        echo "<td>" .$row['album'] . "</td>";
        echo "<td>" .$row['genre'] . "</td>";
        echo "<td>" .$row['year'] . "</td>";
        echo "<td>" .$row['price'] . "</td>";
        echo "<td>" .$row['date_added'] . "</td>";
        echo "</tr>";
    ?>
            <td> <a href="update.php?id=<?=$row['id']?>">Update</td> 
            <td> <a href="delete.php?id=<?=$row['id']?>">Delete</td>    
        </tr>
    </table>
    </div>


 <?php   }  ?>
            </div>
        </div>
    
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>