<?php include "connect.php";

//Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    //This links to the DB itself.
    
    $photoname = $_POST["photoname"];
    $photopath = $_FILES["photo"]["name"];
    $sql = "INSERT INTO product (photoname, photopath) VALUES ('$photoname', CONCAT ('img/db/', '$photopath'))";
    $query = mysqli_query($conn, $sql);
    
    
    function redirect_to( $location = NULL ){
        if($location != NULL){
            header("Location: {$location}");
            exit;
        }
    }
    
    if(file_exists("img/db/" . $_FILES["photo"]["name"])){
        echo $_FILES["photo"]["name"] . " already exists.";
    }
    else {
        move_uploaded_file($_FILES["photo"]["tmp_name"],
        "img/db/" . $_FILES["photo"]["name"]);
        redirect_to('fileuploadphotolist.php');
    }    
    //This part is for the folders - This is local and not linked to the DB - This above is what links it to the DB itself.  
    
    //Check if the file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){ 
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
        
        //Verify File Extension
        $ext = pathinfo ($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format."); 
        
        //Verify File Size - 5MB Maximum.
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size exceeds the 5MB limit.  Please upload a smaller file size."); 
        
        //Verify MIME type of the file
        if(in_array($filetype, $allowed)){ 
            
            //Check whether file exists before uploading it
            if(file_exists("img/db/" . $_FILES["photo"]["name"])){ 
                echo $_FILES["photo"]["name"] . " already exists.";
            }
            else{ 
                move_uploaded_file($_FILES["photo"]["tmp_name"], "img/db/" . $_FILES["photo"]["name"]);             
                echo "Your file was successfully uploaded.";                
            }
        }
            else{ 
                echo "Error: There was a problem uploading your file.  Please try again.";
                echo "<br>"; //Error catch - Allows return to homepage on an issue
                echo "<a href='index.php'>Click here to return to Home Page</a>";
            }
    }
            else{ 
                echo "Error: " . $_FILES["photo"]["error"]; 
                echo "<br>";
                echo "<a href='index.php'>Click here to return to Home Page</a>";
            }
            
        }
    ?>
