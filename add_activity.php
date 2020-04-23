<?php

include_once ("presentation.class.php");
include_once ("business.class.php");

View::start();

View::header();

$create = true;
$completo = false;

if (isset($_POST["access"])){
    $nombre = $_POST["nombre"];
    $tipo = $_POST["tipo"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $aforo = $_POST["aforo"];
    $inicio = $_POST["inicio"];
    $duracion = $_POST["duracion"];
    
    if (empty($nombre) or empty($tipo) or empty($descripcion) or empty($precio) 
                       or empty($aforo) or empty($inicio) or empty($duracion))
                         {
        $create = false;
        $completo = false;
    } else{
        $completo = true;
    }
    
    if($completo){
        $idempresa = User::getLoggedUser()['id'];
        if(Empresa::crearActividad($idempresa,$nombre,$tipo,
                            $descripcion,$precio,$aforo,
                            $inicio,$duracion)){
            header("Location:perfil.php");
        } else {
            $create = false;
        }
    }
}
?>
<!-- Seccion central -->
<section class="central">
	<div class="container title">
		<h1>Crear Actividad</h1>
	</div>
		<div class="background">
		<div class="container content">
			<div class="margin">
				<div class="form">
				    <form class="formlogin" method="POST" action="add_activity.php">
				        <input type="text" name="access" value="true" hidden><br><br>
				        <label class="labelogin" for="nombre">Nombre:</label><br>
				        <input class="inputlogin" type="text" name="nombre"><br><br>
				        <label class="labelogin" for="tipo">Tipo:</label><br>
				        <input class="inputlogin" type="text" name="tipo"><br><br>
				        <label class="labelogin" for="descripcion">Descripcion:</label><br>
				        <input class="inputlogin" type="text" name="descripcion"><br><br>
				        <label class="labelogin" for="precio">Precio:</label><br>
				        <input class="inputlogin" type="text" name="precio"><br><br>
				        <label class="labelogin" for="aforo">Aforo:</label><br>
				        <input class="inputlogin" type="text" name="aforo"><br><br>
				        <label class="labelogin" for="inicio">Inicio:</label><br>
				        <input class="inputlogin" type="text" name="inicio"><br><br>
				        <label class="labelogin" for="duracion">Duracion:</label><br>
				        <input class="inputlogin" type="text" name="duracion"><br><br>
				        <button class="button" type="submit">Crear Actividad</button><br>
				    </form>
				</div>
				<?php
                    if (!$create) {
                        if(!$completo){
                            echo "<p><b>Rellene todos los campos</b></p>";
                        }
                    }
                ?>
			</div>
		</div>
		</div>
	</div>
</section>

<?php
	View::footer();
