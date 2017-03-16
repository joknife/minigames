<?php
	session_start();

	$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$parts = explode('/',trim($path,'/'));
	
	switch ($parts[0]) {
			case 'chat':
				
				if (!isset($_SESSION['id'])) {
					$title = "Login";
					$header = "Login";
					include_once 'views/head.php';
					include 'views/login.php';
				} else {
					$title = "Chat";
					$header = "Chat";
					$name = $_SESSION['id'];
					include_once 'views/head.php';
					include 'views/chat.php';
				}
			break;

			case 'tictac':

				if (!isset($_SESSION['id'])) {
					$title = "Login";
					$header = "Login";
					include_once 'views/head.php';
					include 'views/login.php';
				} else {
					$title = "Крестики нолики";
					$header = "Крестики нолики";
					$name = $_SESSION['id'];
					include_once 'views/head.php';
					include 'views/tictac.php';
				}
			break;
			
			default:

				$title = "Главная";
				$header = "Выбор категории";
				include_once 'views/head.php';
				include 'views/main.php';
			break;
		}	


	include 'views/footer.php';