<?php  
session_start();
include "koneksi.php";


if( !$link ){
	die('ada error ' . mysqli_connect_error());

// $username = $_POST['username'];
// $password = $_POST['password'];

// $sql = mysqli_query("SELECT * FROM login WHERE username = ' " .$username."' AND password = '".$password."' ") or die (mysqli_error() );

// // if(mysqli_num_rows($sql) == 0 ) {
// // 	echo '<script language = "javascript">
// // 	alert ("Username dan Password anda salah! silahkan login kembali."); document.location="main.php";</script>';
// // }else {
// // 	echo '<script language = "jayascript">
// // 	alert ("anda berhasil login!."); document.location="halaman.php";</script>';
// // }

// if (mysqli_num_rows($sql) == 0 ) {
// 	// echo <script language = "javascript">;
// 	alert ("usernama atau passwor and salah, silahkan coba lagi");
// 	document.Location ("main.php").innerPHP = if;
// 	// </script>;
// }else {
// 	// echo <script language = "javascript">;
// 	alert ("anda berhasil login !.");	
// 	document.Location ("halaman.php").innerPHP = else;
// 	// </script>;
// }

if (isset($_POST['username']) && isset($_POST['password'])) {
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$username = validate ($_POST['username']);
	$password = validate ($_POST['password']);

	if (empty($username)) {
		header("location: main.php?error=username salah");
		exit();
	}else if(empty($password)) {
		header("location: main.php?error=password salah");
		exit();
	}else {
		$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1 ) {
			$row = mysqli_fetch_assoc($result);
			if ($row['username'] === $username && $row['password'] === $password) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['nama'] = $row['nama'];
				$_SESSION['id'] = $row['id'];
				header("location: home.php");
			    exit();
			}else {
				header("location: main.php?error=data belum terdaftar");
			    exit();	
			}
		}else {
			header("location: main.php?error=data belum terdaftar");
			exit();
		}
	}

}else {
	header("location: main.php");
	
}
?>