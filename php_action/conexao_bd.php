<?php 

	$server_name = '127.0.0.1';
	$user_name = 'root';
	$password = 'Rb25s87@#@';
	$db_name = 'dbDados';

	$connection = mysqli_connect($server_name,$user_name,$password,$db_name);

	/*mysqli_set_charset($connection,"utf-8");*/

	if (mysqli_connect_error()) {
		echo "Erro ao conectar com o banco de dados" . mysql_connect_error();
	}