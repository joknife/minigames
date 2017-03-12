<?php
	$file = file('../chat.txt');
	$count = count($file);

	for ($i = 0; $i < $count; $i++) { 
		echo $file[$i].'<br>';
	}
//echo $count."строк";