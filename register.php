<?php

	include ("presentation.class.php");
	View::start();
	View::header();

$login = true;

if (isset($_POST["access"])){
    $userName = $_POST["user"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $place = $_POST["place"];
    $dir = $_POST["dir"];
    $tlfn = $_POST["tlfn"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    
    if($password1 != $password2){
    	$login = false;
    }
    
    if(User::registerUser($usuario,$pass, $name, $email, 
    					  $poblacion, $direccion, $telefono)){
        header('Location:index.php');
    } else {
        $login = false;
    }
}


?>
<!-- Seccion central -->
<section class="central">
	<div class="container title">
		<h1>Regístrate</h1>
	</div>
		<div class="background">
		<div class="container content">
			<div class="margin">
				<div class="form">
				    <form class="formlogin" method="POST" action="index.php">
				        <input type="text" name="access" value="true" hidden><br><br>
				        <label class="labelogin" for="user">Usuario:</label><br>
				        <input class="inputlogin" type="text" name="user"><br><br>
				        <label class="labelogin" for="email">Email:</label><br>
				        <input class="inputlogin" type="text" name="email"><br><br>
				        <label class="labelogin" for="name">Nombre:</label><br>
				        <input class="inputlogin" type="text" name="name"><br><br>
				        <label class="labelogin" for="place">Poblacion:</label><br>
				        <input class="inputlogin" type="text" name="place"><br><br>
				        <label class="labelogin" for="dir">Direccion:</label><br>
				        <input class="inputlogin" type="text" name="dir"><br><br>
				        <label class="labelogin" for="tlfn">Telefono:</label><br>
				        <input class="inputlogin" type="text" name="tlfn"><br><br>
				        <label class="labelogin" for="password1">Contraseña:</label><br>
				        <input class="inputlogin" type="password" name="password1"><br><br>
				        <label class="labelogin" for="password2">Confirmar Contraseña:</label><br>
				        <input class="inputlogin" type="password" name="password2"><br><br>
				        <button class="button" type="submit">Crear Cuenta</button><br>
				    </form>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>

<?php
	View::footer();
?>
