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
<!--Header ends here --> 
    
    <div class="row">
            <div class="col-12 text-center">
        <h2>Album Details</h2>
        </div>
    </div>
    
        <div class="row" id="searchTable">
            <div class="col-8 mx-auto text-center">
    
<?php 
    
    $query = "SELECT * FROM vinyl";
    $result = mysqli_query($conn, $query);
?>
    
    <div class='table-responsive-md'>
        <table class='table table-gray-dark'>
            <tr>
            <th>Cover</th>
            <th>Artist</th>
            <th>Album</th>
            </tr>
        <?php
        echo "Your file was uploaded successfully.";
        while ($row = mysqli_fetch_array($result)){
            $photoID=$row["id"]; 
            $photoname=$row["artist"];
            $photoalbum=$row["album"];
            $photopath=$row["album_cover"];
        ?>
        
        <tr>
            <td> <img id="albumCoverSearch" src="<?php echo " $photopath "; ?>" alt="Photo"> </td>
            <td> <?php echo "$photoname";?> </td>    
            <td> <?php echo "$photoalbum";?> </td> 
        </tr>        
        
    <?php  }  ?>
    
    </table>
                </div> <!--Table End-->
            </div>
        </div>
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>