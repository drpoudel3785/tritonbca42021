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

	<div class="container col-md-3 border border-dark">
		<h1 class="text-dark bg-danger text-center card-header">Create User</h1>
		<section>
			<form class="form-group" method="POST" action="insert.php">

				<div class="form-group">
  				 	<label>Username </label>
    				<input type="text" class="form-control" placeholder="Enter username" name="uname" required>
  				</div>

  				<div class="form-group">
    				<label>Password</label>
    				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="upass">
  				</div>

  				<div class="form-group">
  				 	<label>Email address</label>
    				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="uemail">
    				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  				</div>

  				<label for="Department">Role</label>

					<select name="urole" class="form-control">
					 
					  <option value="Admin" value="1">Admin</option>
					  <option value="user" value="2">Finance</option>
					 
					</select>

					<div class="row">
      					<legend class="col-form-label col-sm-2 pt-0" name="gender">Status</legend>
						<div class="col-sm-10">
					        <div class="form-check">
					          <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="1" checked>
					          <label class="form-check-label" for="gridRadios1">
					            Active
					          </label>
					        </div>
					        <div class="form-check">
					          <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="0">
					          <label class="form-check-label" for="gridRadios2">
					            Deactive
					          </label>
					        </div>
					       
				      </div>
				  </div>
					  				
  			<br>
  			
  				<button type="submit" name ="submit" class="btn btn-primary">Submit</button>
			</form>
			
			</div>
		</section>
		
	</div>

</body>
</html>	