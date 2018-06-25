<?php

define('DB_NAME', 'mydb');
define('DB_USER', 'koad');
define('DB_PASSWORD', 'master');
define('DB_HOST', 'localhost');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(mysqli_connect_errno($link)){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



?>