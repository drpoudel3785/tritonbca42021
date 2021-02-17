<?php

$sql="CREATE table users(
	id int PRIMARY KEY AUTO_INCREMENT,
	uname VARCHAR(50) NOT NULL unique,
	upass VARCHAR(50) NOT NULL,
	uemail VARCHAR(50) NOT NULL unique,
	urole VARCHAR(50) NOT NULL,
	gender VARCHAR(50) NOT NULL
)";

//connceting dataase 
include('connection.php');

//creating table

$qry=mysqli_query($conn, $sql);

if($qry)
{
	echo "users table created";
}
else
{

	echo "users table not created";
}

?>