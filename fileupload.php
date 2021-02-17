<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<?php
   if(isset($_POST["submit"])) {
     $name = $_FILES["fileToUpload"]["name"];
     $tmp = $_FILES["fileToUpload"]["tmp_name"];
     $size = $_FILES["fileToUpload"]["size"];
     $tstamp = date('Ymdhis');
     $destination = "uploads/".$tstamp.$name;
     $type= $_FILES["fileToUpload"]["type"];
     $imgtype=strtolower(pathinfo($name, PATHINFO_EXTENSION));


if($imgtype=="jpg" || $imgtype=="jpeg" || $imgtype=="gif" || $imgtype=="png")
{ 
     if(move_uploaded_file($tmp, $destination))
     {
       echo "The file is uploaded";
       echo "<img src='$destination' alt='$name' width='200px'>";
     }
     else {
       echo "Something wrong while uploading file";
     }
   }
  else
  { echo "Pls use image only (jpg or png or gif)"; 
  }
}

?>