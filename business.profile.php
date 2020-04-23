<?php

include_once ("presentation.class.php");
include_once ("data_access.class.php");

View::start();

View::header();

$user = User::getLoggedUser();

if ($user == null) {
	header("Location:index.php");
}

$SQL = "SELECT * FROM actividades WHERE idempresa=${user['id']};";
$activities = DB::execute_sql($SQL)->fetchAll(PDO::FETCH_NAMED);

echo "<!-- Seccion central -->";
echo "<section class='central'>";
echo "<div class='container title'>";
echo "<h1>${user['nombre']}</h1>";
echo "</div>";
echo "<div class='background'>";
echo "<div class='container content'>";
echo "<div class='margin'>";

echo "<table class='business_profile'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>día</th>";
echo "<th>Aforo</th>";
echo "<th>Precio</th>";
echo "<th>Tickets</th>";
echo "<th>Editar</th>";
echo "<th>Eliminar</th>";
echo "</tr>";

foreach ($activities as $activity) {
	
	$id = $activity['id'];
	$nombre = $activity['nombre'];
	$dia = date("d-m-y", $activity['inicio']);
	$aforo =$activity['aforo'];
	$precio =$activity['precio'];

	echo "<tr>";
	echo "<td>$nombre</td>";
	echo "<td>$dia</td>";
	echo "<td>$aforo</td>";
	echo "<td>$precio</td>";
	echo "<td><a href='activity.php?id=$id'>Ver</a></td>";
	echo "<td>Editar</td>";
	echo "<td>Eliminar</td>";
	echo "</tr>";

}

echo "</table>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</section>";

View::footer();