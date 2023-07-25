<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "toko";

	$kon = mysqli_connect($host, $username, $password, $database);

	if(!$kon){
		echo "Error Code ". mysqli_errno($kon) . mysqli_connect_error();
	}
 ?>