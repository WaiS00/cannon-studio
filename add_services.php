<!DOCTYPE html>
<html lang="en">
<?php require_once "backend/add_backend.php"; ?>

<HEAD>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="css/register.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Cannon Studio</title>
    <link rel="icon" href="resources/img/cannon_logo.png" />
</HEAD>

<body>
	<?php include 'header.php';?>
	<form method="post">
		<table width="450" class="center">
			<h1 class="titleName">Add Services</h1>
			<tr>
				<td><label>Service Name</label></td>
				<td><input type="text" name="name" />
			</tr>
			<tr>
				<td><label>Image href</label></td>
				<td><input type="text" name="image" />
			</tr>
			<tr>
				<td><label>Price (RM)</label></td>
				<td><input type="number" name ="price" step="0.01" value="0.0"  />
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" class="submitbtn"></td>
			</tr>
		</table>		
	</form>
	<?php include 'footer.php';?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

