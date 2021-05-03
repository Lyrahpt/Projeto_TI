<?php
	session_start();
	if (isset($_POST["logout"]))
	{
		session_destroy();
	}
	elseif (isset($_SESSION["username"]))
	{
		header("location: dashboard.php");
	}
	elseif (isset($_GET["ERRO"]))
	{

		switch ($_GET["ERRO"]) {
			case 0:
				echo "login invalido";
				break;
			
			case 1:
				echo "tem de fazer login para entrar nesta pagina!";
				break;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>4URsecurity</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="body">
	<header class="header">
  		<h2>Welcome to 4 Your Security</h2>
	</header>

	<!-- form para o login -->
	<div class="container">
		<div class="box-out">
			<form class="formLogin" action="login_validation.php" method="POST">

				<div class="form-group-user">
					<label class="box-user" for="username">
						<img src="../img/user.png" width="20" height="20"><strong>USERNAME</strong></label>
					<input class="user" type="text"  name="username" placeholder="Username..." required><br>
				</div>

				<div class="form-group.pwd">
					<label class="box-pwd" for="password">
						<img src="../img/key.png" width="20" height="20"><strong>  PASSWORD</strong></label>
					<input class="pwd" type="password" name="password" placeholder="Password..." required><br>
					</div>

					<input class="box-submit" type="submit" name="submit">
					</form>
		</div>
	</div>

	<footer class="footer">
  		<p><strong>Projeto TI - Engenharia Informática</strong></p>
	</footer>

</body>
</html>