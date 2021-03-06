<?php

include_once ("data_access.class.php");
include_once ("presentation.class.php");

View::start();

View::header();

echo "<h1 class='title'>Usuarios</h1>";

echo "<div class='tour_list'>";
echo "<table style='text-align: center'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Usuario</th>";
echo "<th>Nombre</th>";
echo "<th>Tipo</th>";
echo "<th>Editar</th>";
echo "<th>Eliminar</th>";
echo "</tr>";

$SQL = "SELECT * FROM usuarios";
$users = DB::execute_sql($SQL)->fetchAll(PDO::FETCH_NAMED);

foreach ($users as $usr) {
	
	echo "<tr>";
	echo "<td>" . $usr['id'] . "</td>";
	echo "<td>" . $usr['cuenta'] . "</td>";
	echo "<td>" . $usr['nombre'] . "</td>";
	echo "<td>";
	switch ($usr['tipo']) {
		case 1:
			echo "Administrador";
			break;
		case 2:
			echo "Empresa";
			break;
		
		default:
			echo "Cliente";
			break;
	}
	echo "</td>";

	echo "<td>";
	echo "<form action='modify_user.php' method='POST' style='text-align: center;'>";
	echo "<input type='text' name='id' value='${usr['id']}' hidden>";
	echo "<input type='submit' value='Editar'>";
	echo "</form>";
	echo "</td>";

	echo "<td>";
	echo "<form action='perfil.php' method='POST' style='text-align: center;'>";
	echo "<input type='text' name='user_id' value='${usr['id']}' hidden>";
	echo "<input type='text' name='command' value='del_user' hidden>";
	echo "<input type='submit' value='Eliminar'>";
	echo "</form>";
	echo "</td>";

	echo "</tr>";

}

echo "</table>";
echo '</div>';

// Tickets
echo "<h1 class='title' style='margin-top: 20px; border-top: 3px #ACACAC dashed;'>Tickets</h1>";

echo "<div class='tour_list'>";
echo "<table style='text-align: center'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Cliente</th>";
echo "<th>Actividad</th>";
echo "<th>Precio</th>";
echo "<th>Unidades</th>";
echo "<th>Total</th>";
echo "<th>Ver actividad</th>";
echo "</tr>";

$SQL = "SELECT * FROM tickets";
$tickets = DB::execute_sql($SQL)->fetchAll(PDO::FETCH_NAMED);

foreach ($tickets as $ticket) {

	$SQL = "SELECT nombre FROM usuarios WHERE id='${ticket['idcliente']}'";
	$cliente = DB::execute_sql($SQL)->fetchAll(PDO::FETCH_NAMED)[0]['nombre'];

	$SQL = "SELECT nombre FROM actividades WHERE id='${ticket['idactividad']}'";
	$actividad = DB::execute_sql($SQL)->fetchAll(PDO::FETCH_NAMED)[0]['nombre'];

	echo "<tr>";
	echo "<td>" . $ticket['id'] . "</td>";
	echo "<td>" . $cliente . "</td>";
	echo "<td>" . $actividad . "</td>";
	echo "<td>" . $ticket['precio'] . "</td>";
	echo "<td>" . $ticket['unidades'] . "</td>";
	echo "<td>" . $ticket['precio'] * $ticket['unidades'] . "</td>";
	
	echo "<td>";
	echo "<form action='excursion.php' method='POST' style='text-align: center;'>";
	echo "<input type='text' name='id' value='${ticket['idactividad']}' hidden>";
	echo "<input type='submit' value='Ir'>";
	echo "</form>";
	echo "</td>";

	echo "</tr>";

}


echo "</table>";
echo '</div>';

View::footer();