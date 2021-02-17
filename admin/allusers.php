<?php
include('checksession.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users </title>
</head>
<body>
<div>Welcome, <?php echo $_SESSION['usr']; ?> </div>

<h1>All Users</h1>
<div>
<a href="allusers.php">Get All Uses</a>
</div>
<?php
//get all users
$sql  = "SELECT * from users";
//Connect to DB
include('connection.php');
//Querying the table
$qry = mysqli_query($conn, $sql);
//Displaying all data
echo "<table border=1>";
echo "<thead>";
echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>Role</th><th>Status</th></tr>";
echo "</thead>";
echo "<tbody>";
while($row=mysqli_fetch_array($qry))
{
    echo "<tr>";
    echo "<th>".$row['id']."</th>";
    echo "<th>".$row['uname']."</th>";
    echo "<th>".$row['uemail']."</th>"; 
    echo "<th>".$row['urole']."</th>";  
    echo "<th>".$row['status']."</th>";

}
echo "</tbody>";
echo "</table>";   

?>
    
</body>
</html>