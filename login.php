<?php

 require_once 'backend/login_backend.php';?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "backend/config.php"; ?>

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

		<form action="" method="post">
			<table width="450" class="center2">
				<h1 class="titleName2">Login</h1>
				<tr>
					<td><label>Username</label></td>
					<td><input type="text" name="username" />
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="pwd" />
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="submit" class="submitbtn2">
				</tr>
			</table>		
		</form>
	</body>

<?php include 'footer.php';?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
