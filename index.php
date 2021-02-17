<?php
   session_start();

   $_SESSION['user']="Dharma";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
<?php
require('inc_header.php');
?>

<h1> Welcome to the similar_text</h1>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur facere accusantium, provident commodi eum distinctio corporis expedita atque minima laudantium ducimus cupiditate eveniet enim non ullam quae inventore cum soluta.


<?php

echo readfile("readme.txt");

   include('inc_footer.php');?>



<?php
$myfile = fopen("readme.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("readme.txt"));

fclose($myfile);
?>


<?php
$myfile = fopen("readme.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>


<hr>
<?php
$myfile = fopen("readme.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>


<hr>
<?php
$myfile = fopen("readme.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>

<hr>
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>





    
</body>
</html>