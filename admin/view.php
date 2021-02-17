<!DOCTYPE html>
<html>
<head>
	<title>crud operation</title>
	 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>
<body>
	<div class="container">
	
			<div class="col-lg-12">
				<h1 class="text-danger bg-success card-header font-weight-bold text-center">DATA</h1>

				<div class="border border-0">

					<table class="table table-striped table-hover table-bordered">

						<thead class="bg-danger  text-center text-dark">
							<th>ID</th>
							<th>Username</th>
							<th>Password</th>
							<th>E-mail</th>
							<th>User Role</th>
							<th>Stasu</th>
							<th>Function</th>
						</thead>

						<tbody>
							
							<?php

								//connection with php
								include('connection.php');

								//making query
								$sql="SELECT *FROM users";

								//executing query
								$qry=mysqli_query($conn, $sql);
								$count=mysqli_num_rows($qry);

								//fetching data from database
								$i=0;
								while ($row=mysqli_fetch_array($qry))
								{
									$i++;

									?>
									<tr class="text-center">
											
											<td> <?php echo $i ?> </td>

											<td> <?php echo $row['uname']; ?> </td>

											<td> <?php echo $row['upass']; ?> </td>

											<td> <?php echo $row['uemail']; ?> </td>

											<td> <?php echo $row['urole'];?></td>

											<td> <?php echo $row['status'];?></td>
											
											<td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $row['id']; ?>"class="text-white"> Delete </a></button>   <button class="btn-primary btn"><a href="update.php?id=<?php echo $row['id']; ?>" class="text-white"> Update </a></button></td>

									</tr>
									<?php
								}
								?>

						</tbody>

					</table>
					
				</div>
			
		</div>
	</div>
	<script src="js/jquery-3.5.0.min.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	

	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function ()
		 {
    	$('#myTable').DataTable();
		} );
	</script>
</body>
</html>