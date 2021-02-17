<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   echo "Today is: ".date('Y-m-d');
   ?>

   <?php
     /* Multiline Comments
       can be written like
       this 
    */

    # single line coments
    //another way of writing the comments

    $name="Ram";
    $age="20";


    echo "My name is $name and i am $age years old";
    echo "<br>Age is " .gettype($age). "Variable type.";


?>

<?php
// Defining constant
define("CLZNAME", "Triton Internation College");
 
// Using constant
echo 'Thank you for studying in  - ' . CLZNAME;

$a = 123; // decimal number
var_dump($a);
echo0 "<br>";


?>


   
    
</body>
</html>