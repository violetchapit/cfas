<?php 

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "db_cfas";


$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
	die("Connection Failed" . mysqli_error($conn));
} else {
	// echo "Connected succesfully";
}






 ?>