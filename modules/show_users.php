<?php
	session_start();
	if (!isset($_SESSION['id'])) {
		exit();
	}
	
	$name = $_SESSION['id'];
	$time = time();

	include 'db.php';

	$upd = "UPDATE users SET online=$time WHERE name='$name'";
	$res = mysqli_query($db_link, $upd) or die (mysqli_error($db_link));

	$timeout = $time - 40;
	$sel = "SELECT name FROM users WHERE online>'$timeout'";
	$res = mysqli_query($db_link, $sel) or die (mysqli_error($db_link));
	$num = mysqli_num_rows($res);
	if ( $num > 0 ) {
		for( $i = 0; $i < $num; $i++) {
			$user = mysqli_fetch_array($res,MYSQLI_NUM);
			echo $user[0] . "<br>";
		}
		
		
	} else {
		echo "no one here";
	}