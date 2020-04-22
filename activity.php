<?php

include_once ("presentation.class.php");
include_once ("data_access.class.php");

View::start();

View::header();

$nombre = $_GET['nombre'];

echo $nombre;

View::footer();