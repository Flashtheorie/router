<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
    <link href="/router/views/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI Pro -->
    <link href="/router/views/css/flat-ui-pro.css" rel="stylesheet">
</head>
<style>

</style>
<body>

<?php include 'navbar.php'; ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="container" align="center">



	<span> <h1><small>Vous êtes sur la page </small><?php echo $request; ?> </h1></span>

<form action="" method="POST" style="width: 50%" class="jumbotron">
	<label for="login">Username :</label>
	<input type="text" id="login" class="form-control" autocomplete="false">

	<label for="password">Password :</label>
	<input type="password" id="password" class="form-control">

<hr>
<input type="submit" value="Login" class="btn btn-hg btn-danger">
</form>



</div>




</body>
</html>