<?php
   session_start();

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
<?php
require('inc_header.php');
?>

<h1> Contact Us <?php echo $_SESSION['user']; ?></h1>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur facere accusantium, provident commodi eum distinctio corporis expedita atque minima laudantium ducimus cupiditate eveniet enim non ullam quae inventore cum soluta.


<?php
   include('inc_footer.php');?>

    
</body>
</html>