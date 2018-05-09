<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "php18_project1";
	$link = mysqli_connect($hostname,$username,$password,$database);
	mysqli_set_charset($link,"UTF8");
 ?>