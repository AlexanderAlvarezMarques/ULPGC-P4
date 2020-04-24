<?php

include_once ("data_access.class.php");

$id = $_GET['id'];

Empresa::eliminarActividad($id);

header("Location:perfil.php");
