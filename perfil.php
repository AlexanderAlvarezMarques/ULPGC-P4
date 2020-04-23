<?php

include_once ("business.class.php");

$user = User::getLoggedUser();

if ($user != null) {
	switch ($user['tipo']) {
		case 1:
			header("Location:partials/administrator.profile.php");
			break;

		case 2:
			header("Location:partials/business.profile.php");
			break;
		
		case 3:
			header("Location:partials/user.profile.php");
			break;

		default:
			header("Location:index.php");
			break;
	}
}
