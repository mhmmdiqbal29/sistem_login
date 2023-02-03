<?php  
error_reporting(0);
session_start();
$host = "localhost";
$username = "root";
$password = "";
$databasename = "belajar";
// $connection = mysqli_connect($host, $username, $password,) or die (mysqli_error() );
// mysqli_select_db($databasename, $connection) or die (mysqli_error() );

$conn = mysqli_connect($host, $username, $password, $databasename);

if (!$conn) {
	echo "login gagal";
}

?>