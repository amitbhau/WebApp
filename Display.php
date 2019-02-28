<?php

$conn = mysqli_connect('localhost','root','','WebApp');
$q = "select id,username,password from `WebAppDB` ";
$result =mysqli_query($conn,$q);
mysqli_close($conn);
?>

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
	<form action="insert.php">

	<div class="container text-center">
		<h1>Display Data</h1> 

		<button type="submit" class="btn btn-primary" style="float:right;">Insert Data</button>
	</form>
	<br><br>


	<table class="table table-bordered table-hover text-center">
		<tr>

			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			
		</tr>

<?php while($rows = mysqli_fetch_array($result)): ?>		
	<tr>
			<td><?php echo $rows['id']?></td>
			<td><?php echo $rows['username']?></td>
			<td><?php echo $rows['password']?></td>
			
		</tr>
<?php endwhile; ?>


	</table>
	
							
	</div>

</body>
</html>