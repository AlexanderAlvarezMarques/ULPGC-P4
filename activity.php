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
$duracion = $activity['duracion'];
$inicio = $activity['inicio'];
$img = View::imgtobase64($activity['imagen']);

echo $nombre;
echo $img;

View::footer();
