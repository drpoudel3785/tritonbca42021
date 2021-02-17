<?php

include('connection.php');

$id= $_GET['id'];

$qry= "DELETE FROM users WHERE id=$id";
mysqli_query($conn, $qry);
if(qry)
{

header('location: view.php');
 }
 else
  {
  	echo "data not deleted";
  } 
?>