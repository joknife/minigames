<?php
	session_start();
	if (!isset($_POST['name']) && !isset($_POST['text'])){

		echo "Error massage";

	} else {

		$name = $_SESSION['id'];//$_POST['name'];
		$text = $_POST['text'];
		if ($text == 'out'){
			unset($_SESSION['id']);
			echo "logout";
		} else {
			$text = htmlspecialchars($text);
			$filename = "../public/chat.txt";
			$str = "\n$name : $text";
			$file = fopen($filename, 'a');
			fwrite($file, $str);
			fclose($file);
		}	
	}