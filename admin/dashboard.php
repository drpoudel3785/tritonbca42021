<?php
include('checksession.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>
</head>
<body>
<div>Welcome, <?php echo $_SESSION['usr']; ?> </div>

<h1>Dashboard</h1>
<div>
<a href="allusers.php">Get All Uses</a>
</div>
    
</body>
</html>