<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		exit();
	}
	$file = '../public/chat.txt';
	if(file_exists($file)){
		$file = file($file);
	}
	$count = count($file);
	$set = 0;
	if ($count > 20){
		$set = $count - 20;
	}
	for ($i = $set; $i < $count; $i++) {
		if ( $i%2 == 0 ){
			echo "<span style ='color: #000'>" . $file[$i] . '</span><br>';
		} else {
			echo "<span>" . $file[$i] . '</span><br>';
		}	
	}
