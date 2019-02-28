

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>



<body>
	<div class="container text-center">
		<h1>Inert Data</h1>
	
	<br><br>
	<form method="post" action="insert.php">
							<div class="col-md-12">

											<div class="col-md-2">
															
											</div>
											<div class="col-md-4">
														<label>Username</label>
														
											</div>

											<div class="col-md-4">
													
														<input id="Username" name="Username" type="text" class="form-control" required>
											</div>	

							</div>	
							<br><br>
							<div class="col-md-12">
											<div class="col-md-2">
															
											</div>

											<div class="col-md-4">
														<label>Password</label>
														
											</div>

											<div class="col-md-4">
													
														<input  id="Password" name="Password" type="password" class="form-control" required>
											</div>	

							</div>	
							<br><br>	<br><br>	
							<div class="col col-md-12">
								<button type="submit" class="btn btn-primary">Insert</button>
								<a href="Display.php"><button type="button" class="btn btn-primary">Display</button></a>
							</div>
		</form>					
	</div>

	

</body>
</html>


<?php

$conn = mysqli_connect('localhost','root','','WebApp');

$uname = $_POST['Username'];
$pd = $_POST['Password'];

if($uname!=NULL && $pd!=NULL)
{

$q = "INSERT INTO `WebAppDB` (`username`, `password`) VALUES ('$uname','$pd')";


mysqli_query($conn,$q);
}
mysqli_close($conn);

?>
