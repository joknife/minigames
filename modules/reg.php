<?php
	session_start();
	
	if (!isset($_SESSION['id'])){
		echo "Как ты сюда попал?";
		exit();
	}

	$name = $_SESSION['id'];
	$time = time();

	include 'db.php';

	$sel = "SELECT * FROM tictac WHERE name1='$name' OR name2='$name'";
	$res = mysqli_query($db_link,$sel) or die (mysqli_error($db_link));
	$rec_num = mysqli_num_rows($res);
	$str = mysqli_fetch_assoc($res);

	if ($rec_num == 0){

		$sel = "SELECT * FROM tictac WHERE status=1";
		$res = mysqli_query($db_link,$sel) or die (mysqli_error($db_link));
		$stat_num = mysqli_num_rows($res);
		$str = mysqli_fetch_assoc($res);
		
		if ($stat_num == 0){
			
			$ins = "INSERT INTO tictac (name1, online, status)
					VALUES ('$name', '$time', 1)";
			$res = mysqli_query($db_link, $ins) or die (mysqli_error($db_link));
			$_SESSION['status'] = 1;
			echo "Ждем второго";
		} else {

			$name1 = $str['name1'];
			$ins = "UPDATE tictac SET online='$time', name2='$name', status=2 WHERE name1='$name1'";
			$res = mysqli_query($db_link, $ins) or die (mysqli_error('39' . $db_link));
			$_SESSION['status'] = 2;
			$_SESSION['move'] = 0;
			$_SESSION['file'] = $name1 . $name;
			echo "Началась игра с " . $name1;
		}
	} else {
		
		$_SESSION['status'] = $str['status'];

		if ($_SESSION['status'] == 1){
			echo "Ждем второго";
		}
		if ($_SESSION['status'] == 2){
			if ($str['name1'] == $name){

				$_SESSION['move'] = 1;
				$_SESSION['file'] = $name . $str['name2'];
				echo "Началась игра с " . $str['name2'];
			} else {

				$_SESSION['move'] = 0;
				$_SESSION['file'] = $str['name1'] . $name;
				echo "Началась игра с " . $str['name1'];
			}
		}
	}
	if (isset($_SESSION['file'])) {

		$field = array ('0', '0', "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0"); //move, id, matrix
		$field = serialize($field);
		file_put_contents("../public/" . $_SESSION['file'] . ".txt", $field);
	}