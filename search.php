<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
    <title>"Music Online Search"</title>
    <meta name="description" content="#"> 
    <meta name="keywords" content="#">
    <style>

    </style>    
</head>
<body>
<main> 
<!--Header starts here -->
<?php include ("header.php"); ?>
<!--Header ends here -->
    
    <div class="row">
            <div class="col-12 text-center">
        <h2>Music Results</h2>
        </div>
    </div>
    
        <div class="row" id="searchTable">
            <div class="col-8 mx-auto text-center">
    

<?php   
    if(isset($_POST['search'])){
        $search = mysqli_real_escape_string($conn, $_POST['searchInput']); //name of my input in form
        $query="SELECT * FROM vinyl WHERE artist LIKE '%{$search}%' or album LIKE '%{$search}%' or genre LIKE '%{$search}%' ";
        $result = mysqli_query($conn, $query);
        
        //This puts it into a table
        echo "<div class='table-responsive-md'>
        <table class='table table-gray-dark'>
        <tr>
        <th>Cover</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Details</th>
        </tr>";

    while ($row = mysqli_fetch_array($result)){
        
        $url = '<a id="detailsText" href="details.php?id='.$row['id']. '">View Details</a>';
        
        echo "<tr>";
        echo "<td><img id='albumCoverSearch' src=".$row['album_cover']."></a></td>";
        echo "<td>" .$row['artist'] . "</td>";
        echo "<td>" .$row['album'] . "</td>";
        echo "<td>" .$row['genre'] . "</td>";
        echo "<td>$url</td>";
        echo "</tr>";
    }
    
    echo "</table> </div>";
        
        //table ends here

    }
?>

            </div>
    </div>
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>