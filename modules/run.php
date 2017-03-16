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
			break;

		case 'wait':

			if (file_exists($file)){

				$data = file_get_contents($file);
				$data = unserialize($data);
			} else {

				echo '0 0';
				break;
			}

			if ($data[0] == 5) {
				echo "5 0";
				break;
			}

			if ($data[0] == $move) {

				$status = 2;
					
			} else {

				$status = 1;
			}

			$msg = $status . " " . $data[1] . " ";
			echo $msg;
			
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

			$matrix = explode(" ", $data[2]);
			$matrix[$target - 1] = $m;
			$data[2] = implode(" ", $matrix);
			$data[1] = $target;
			$status = 1;

			

			if (iswin($matrix) == TRUE) {
			 	$status = 5;
			 	$data[0] = 5;
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
		$c = -1;
		$r = -1;
		$ans = FALSE;

		for($i = 0; $i < 5; $i++){
			for ($j = 0; $j < 5; $j++){
				$arr[$i][$j] = $matrix[($i*5 + $j)];
			}
		}

		for($i = 0; $i < 5; $i++){
			for ($j = 0; $j < 5; $j++){
				
				if ($cc == 3 || $cr == 3) {
					$ans = TRUE;
					break;
				}

				if ($arr[$i][$j] == $c && $c != 0 ) {
					$cc++;
				} else {
					$cc = 0;
					$c = $arr[$i][$j];
				}

				if ($arr[$j][$i] == $r && $r != 0 ) {
					$cr++;
				} else {
					$cr = 0;
					$r = $arr[$j][$i];
				}
			}
		}


//TODO chekout diag
		
		return $ans;

	}