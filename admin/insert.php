<?php
include ('connection.php');

if (isset($_POST['submit']))
{
	$uname=$_POST['uname'];
	$uemail=$_POST['uemail'];
	$upass=md5($_POST['upass']);
	$urole=$_POST['urole'];
	$status=$_POST['status'];
	

	$sql="INSERT INTO users(uname, uemail, upass,  urole, status) VALUES('$uname','$uemail','$upass','$urole','$status')";

	$qry=mysqli_query($conn, $sql);

	if ($qry)
	{
		header('location: view.php');
	}
	else
	{
	echo "data not insert";
		}
}
?>