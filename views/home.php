<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accueil</title>
    <link href="/Projetsactuels/router/views/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI Pro -->
    <link href="/Projetsactuels/router/views/css/flat-ui-pro.css" rel="stylesheet">
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

<code>
Le fait d'aller sur <strong>/home</strong> affiche la page <strong>/views/home.php</strong>
</code>
<hr>
<code>
	    case '/Projetsactuels/router/home' : <br>
        require 'views/home.php'; <br>
        break;
</code>

<br> <hr>
<?php if (isset($_SESSION['id'])): ?>
	Connecté en tant que <?php echo $_SESSION['id']; ?>
<?php endif ?>

<?php if (!isset($_SESSION['id'])): ?>
<a href="createSession" class="btn btn-hg btn-info">Tester avec la session</a>
<?php endif ?>

</div>




</body>
</html>