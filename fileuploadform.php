<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
    <title>Product Search</title> 
    <meta name="description" content="Select a product name results for information on that particular product"> 
    <meta name="keywords" content="#"> 
    

        
    </style>
</head>
<body>
<main>
<?php include ("header.php"); ?>
    
    <div class="row">
            <div class="col-12 text-center">
        <h2>Upload File</h2>
        </div>
    </div>
    
        <div class="row" id="searchTable">
            <div class="col-8 mx-auto text-center">
    
    <form class="uploadForm" action="fileuploadcode.php" method="post" enctype="multipart/form-data">
    <label for="fileSelect">Filename:</label>
        <input id="textColourUploadBox" type="text" name="photoname">
        <input type="file" name="photo" id="fileSelect">
        <br>
        <input id="submitBtnFileUpload" type="submit" name="submit" value="Upload">
        <p id="uploadParaText">Please Note. Only .jpg, .jpeg, .gif and .png formats are allowed with a max size of 5MB.</p>
    </form>
            </div>
    </div>
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>
