<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Caracteres especiales -->
	<meta charset="UTF-8">

	<!-- ViewPort -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Titulo pestana -->
	<title>GCActiva</title>

	<!-- Favicon -->
    <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon">

	<!-- Enlace FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet">

	<!-- Enlaces CSS -->
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="assets/css/xs-sm.css">
	<link rel="stylesheet" href="assets/css/md-lg.css">

	<!-- Enlaces Js -->
	<script src="assets/js/javascript.js"></script>

</head>
<body>
	
	<?php

	include ("presentation.class.php");

	View::header();

	?>

<!-- Seccion central -->
<section class="central">
	<div class="container title">
		<h1>Iniciar Sesión</h1>
	</div>
		<div class="background">
		<div class="container content">
			<div class="margin">
				<div class="form">
				    <form class="formlogin" method="POST" action="index.html">
				        <label class="labelogin" for="nombre">Usuario:</label><br>
				        <input class="inputlogin" type="text" name="nombre"><br>
				        <label class="labelogin" for="password">Contraseña:</label><br>
				        <input class="inputlogin" type="password" name="contraseña"><br><br>
				        <button class="button" type="submit">Identifícate</button><br>
				    </form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer>
	<div class="name">GCActiva</div>
	<div class="copyright">@Copyright <b>Alexander Alvarez</b> - <b>Isidro Bermúdez</b> - <b>Fabián Beirutti</b></div>
</footer>

</body>
</html>
