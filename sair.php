<?php

	session_start();
	unset($_SESSION['id_user'], $_SESSION['name_user'], $_SESSION['sobrenome_user'], $_SESSION['email_user']);
	header("Location: login.php");
?>