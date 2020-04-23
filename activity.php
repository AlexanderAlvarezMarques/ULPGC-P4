<?php

include_once ("presentation.class.php");
include_once ("data_access.class.php");

View::start();

View::header();

$id = $_GET['id'];

$SQL = "select * from actividades where id='$id';";
$activity = DB::execute_sql($SQL)->fetchAll(PDO::FETCH_NAMED)[0];

$nombre = $activity['nombre'];
$tipo = $activity['tipo'];
$precio = $activity['precio'];
$aforo = $activity['aforo'];
$duracion = round($activity['duracion'])/60;
$inicio = date("d-m-Y H:i:s", $activity['inicio']);
$descripcion = $activity['descripcion'];
$idempresa = $activity['idempresa'];
$imagen = View::imgtobase64($activity['imagen']);

$SQL = "select nombre from empresas where idempresa='$idempresa';";
$empresa = DB::execute_sql($SQL)->fetchAll(PDO::FETCH_NAMED)[0]['nombre'];
?>
<section class='central'>
    <div class='container title'>
	    <h1><?php echo $nombre; ?></h1>
    </div>
	<div class='background'>
	    <div class='container content'>
	        <div class='margin'>
                <div class="tour">
                	<!-- Cuerpo -->
                	<div class="body">
                		<!-- Imagen -->
                		<div class="img">
                			<img src="<?php echo $imagen ?>">
                		</div>
                		
                		<!-- Descripcion -->
                		<div class="desc">
                			<?php echo $descripcion; ?>
                		</div>
                
                		<!-- Info -->
                		<div class="info">
                			<div><b>Fecha:</b><div class="value"><?php echo $inicio ?></div></div>
                			<div><b>Duración:</b><div class="value"><?php echo $duracion ?> min</div></div>
                			<div><b>Precio:</b><div class="value"><?php echo $precio ?>€</div></div>
                			<div><b>Empresa:</b><br><a href="empresa.php?name=<?php echo $empresa ?>"><?php echo $empresa ?></a></div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
View::footer();
?>
