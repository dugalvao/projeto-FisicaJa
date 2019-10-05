<?php

	session_start();
	unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['sobrenome'], $_SESSION['email']);
	header("Location: login.php");
?>