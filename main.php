<?php
	session_start();

	//unset($_SESSION['id']);
	$header = "Chat";

	include 'views/head.php';

	if (!isset($_SESSION['id'])) {
		include 'views/login.php';
	} else {
		$name = $_SESSION['id'];
		
		include 'views/chat.php';
	}

	include 'views/footer.php';