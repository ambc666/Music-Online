<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
    <title>Music Online Product Details</title>
    <meta name="description" content="#"> 
    <meta name="keywords" content="#">
</head>
<body>
<main> 
<?php include ("header.php"); ?>
    
    <div class="row">
            <div class="col-12 text-center">
        <h2>Album Details</h2>
        </div>
    </div>
    
        <div class="row" id="searchTable">
            <div class="col-8 mx-auto text-center">
        
<?php
// Get the ID from the URL
$id=(isset($_GET["id"]) && !empty($_GET["id"]) ? $_GET["id"] : ""); 

//Find the matching record based on the ID passed in the URL.
$query="SELECT * FROM vinyl WHERE id=$id";
$result=mysqli_query($conn, $query);

        echo "<div class='table-responsive-md'>
        <table class='table table-gray-dark'>
        <tr>
        <th>Cover</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Year</th>
        <th>Genre</th>
        <th>Price</th>
        <th>Date Added</th>
        </tr>";
    
        while ($row = mysqli_fetch_array($result)){ 
            $album_cover=$row["album_cover"]; 
            $artist=$row["artist"]; 
            $album=$row["album"];  
            $year=$row["year"]; 
            $genre=$row["genre"]; 
            $price=$row["price"];
            $date_added=$row["date_added"];
            
        echo "<tr>";
        echo "<td ><img class='img-fluid' id='albumCoverDetails' src=" . $row['album_cover'] . "></a></td>";
        echo "<td>" .$row['artist'] . "</td>";
        echo "<td>" .$row['album'] . "</td>";
        echo "<td>" .$row['year'] . "</td>";
        echo "<td>" .$row['genre'] . "</td>";
        echo "<td>" .$row['price'] . "</td>";
        echo "<td>" .$row['date_added'] . "</td>";
        echo "</tr>";
    }
        echo "</table> </div>";
        
?>
        </div>
    </div>
    
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>