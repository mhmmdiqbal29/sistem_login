<?php  



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sistem login</title>
	<style type="text/css">
		body {
			font-family: 'Open-Sans', sans-serif;
			background: #031829;
		}

		h1 {
			text-align: center;
			text-transform: 300;
		}

		.tulisan_login {
			text-align: center;
			text-transform: uppercase;
			background-color: orange;
			padding: 10px 20px;
			border-radius: 9px;
			font-family: serif;
		}

		.kotak_login {
			width: 350px;
			background: #32acff;
			margin: 80px auto;
			padding: 30px 20px;
			border-radius: 8px;
		}

		label {
			font-size: 12pt;
			color: black;
		}

		.form_login {
			box-sizing: border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
			margin-top: 10px;
		}

		.tombol_login {
			background: orange;
			color: white;
			font-size: 11pt;
			width: 50%;
			border: none;
			border-radius: 8px;
			padding: 10px 20px;
			cursor: pointer;


		}

		.tombol_login:hover {
			opacity: .5;
			background-color: balck;
			color: purple;
		}

		.error {
			background: white;
			color: red;
			padding: 10px;
			width: 95%;
			border-radius: 9px;
			margin: 20px auto;
		}


	</style>
</head>
<body>
	<div class="kotak_login">
		<p class="tulisan_login">silahkan login</p>


		<form action="ceklogin.php" method="post">
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
		<label>Username : </label>	
		<input type="text" name="username" class="form_login" placeholder="Username" autocomplete="off">
		<label>Password : </label>	
		<input type="password" name="password" class="form_login" placeholder="Password" autocomplete="off">
		<input type="submit" class="tombol_login" value=" login ">
		</form>
	</div>

</body>
</html>