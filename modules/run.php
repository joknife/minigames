<?php
	session_start();
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	if (!isset($_POST['msg']) || !isset($_SESSION['id']) || !isset($_SESSION['move']) || !isset($_SESSION['file'])) {
		exit();
	}

	$file = "../public/" . $_SESSION['file'] . ".txt";
	$move = $_SESSION['move'];
	$msg = $_POST['msg'];

	switch ($msg) {
		case 'status':

			if (file_exists($file)){

				$data = file_get_contents($file);
				$data = unserialize($data);
			} else {

				echo '0 0';
				break;
			}

			if ($data[0] == $move) {

				$status = 2; //your move
				
			} else {

				$status = 1; // wait
			}

			$msg = $status . " " . $move . " ";
			echo $msg;
			//var_dump($move);
			//var_dump($data);
			break;

		case 'wait':

			if (file_exists($file)){

				$data = file_get_contents($file);
				$data = unserialize($data);
			} else {

				echo '0 0';
				break;
			}

			if ($data[0] == $move) {

				$status = 2;
					
			} else {

				$status = 1;
			}

			$msg = $status . " " . $data[1] . " ";
			echo $msg;
			//var_dump($move);
			//var_dump($data);
			break;
		
		case 'move':

			if (file_exists($file)){

				$data = file_get_contents($file);
				$data = unserialize($data);
			} else {

				echo '0';
				break;
			}
			
			if (!isset($_POST['move'])  || $data[0] != $move) { exit();}

			if ($data[0] == "0") {
				$data[0] = "1";
			} else {
				$data[0] = "0";
			}


			$target = $_POST['move'];
			$m = $move + 2;

			$matrix = explode(" ", $data2); 

			$matrix[$target - 1] = $m;
			$data[1] = $target;
			$status = 1;
			

			if (iswin($matrix)) {
			 	$status = 5;
			}

			$data = serialize($data);
			file_put_contents($file, $data);

			echo $status . " " . "0";
			
			break;

		default:
			echo '0';
			break;
	}

	function iswin($matrix)
	{
		$cc = 0;
		$cr = 0;
		for($i = 0; $i < 4; $i++){
			for ($j = 0; $j < 4; $j++){
				$arr = $matrix[($i*5 + $j)];
			}
		}
//TODO chekout arr
		$ans = FALSE;
		return $ans;

	}