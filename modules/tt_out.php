<?php
	session_start();

	if (!isset($_SESSION['id'])) {
		exit();
	}

	include_once 'db.php';

	$file = "../public/" . $_SESSION['file'] . ".txt";
	
	if (file_exists($file)) {
		unlink($file);
	}
	

	$name = $_SESSION['id'];
	$del = "DELETE FROM tictac WHERE name1='$name' OR name2='$name'";
	$res = mysqli_query($db_link, $del) or die (mysqli_error($db_link));
	
	if (isset($_SESSION['status'])){
		unset($_SESSION['status']);
	}
	if (isset($_SESSION['file'])){
		unset($_SESSION['file']);
	}
	unset($_SESSION['id']);
	echo "ok";

