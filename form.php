<?php
date_default_timezone_set('Asia/Tokyo');

$today = date("l, d-M-Y");
$time = date("h:i:s A");
echo $today. " Time is ". $time;

if(isset($_REQUEST['submit']))
{
//retriving the forms data
     $user = $_REQUEST['username'];
     $pass = $_REQUEST['password'];
    echo "User = $user and Password = $pass";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   <form method="POST" name="login" action="" enctype="multipart/form-data">
        <input type="text" name="username" required placeholder="Username"/>
        <input type="password" name="password" required placeholder="Password" />
        <input type="submit" name="submit" value="Login" />
   </form> 
    
</body>
</html>
