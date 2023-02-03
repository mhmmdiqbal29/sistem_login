<?php 

session_start();

if (isset($_SESSION['id']) && (isset($_SESSION['username'])) {



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>home</title>
 	<style type="text/css">
 		h1 {
 			text-align: center;
 			color: black;
 		}

 		a {
 			float: right;
 			background: lightblue;
 			padding: 10px 15px;
 			color: black;
 			border-radius: 8px;
 			margin-right: 10px;
 			border: none;
 			text-decoration: none;
 		}

 		a:hover {
 			opacity: .5;
 		}
 	</style>
 </head>
 <body>
 	<h1>hallo, <?php echo $_SESSION['nama'];  ?></h1>
 	<a href="logout.php">logout</a>
 </body>
 </html>

 <?php 
}else {
	header("location: main.php");
	exit();
  ?>}
