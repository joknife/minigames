<?php

session_start();

if (!isset($_POST['name']) && !isset($_POST['pass'])){ exit();}

$name = $_POST['name'];
$pass = $_POST['pass'];

include 'db.php';

$sel = "SELECT name, pass FROM users WHERE name = '$name'";
$res = mysqli_query($db_link,$sel) or die (mysqli_error($db_link));
$num = mysqli_num_rows($res);
if ($num == 0){
        $date = date("Y-m-d H:i:s");
        $ins = "INSERT INTO users (name, pass, reg_date) 
                VALUES ('$name', '$pass', '$date')";
        $res = mysqli_query($db_link, $ins) or die (mysqli_error($db_link));
        $_SESSION['id'] = $name;
        echo 'login';
    } else {
        $row = mysqli_fetch_array($res,MYSQLI_ASSOC);

        if($row['pass'] == $pass){
           $_SESSION['id'] = $name;
           echo 'login';
        } else {
            echo 'Имя занято не тобой!';
        }
    }