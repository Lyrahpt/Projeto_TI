<?php 
	session_start();
	if (!isset($_SESSION["username"]))
	{
		header("location: index.php?ERRO=1");
		die();
	}
?>

<!DOCTYPE html>
<html>
<head>
		<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>4URsecurity</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body class="body-dash">

	<header class="header-dash">
  		<h2><strong>Welcome to 4UrSecurity</strong></h2>
  		<h5>Servidor IoT</h5>
	</header>

		<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<button class="btn btn-sm btn-outline-secondary" href="dashboard.php">Home <span class="sr-only">(current)</span></button>
				</li>
				<li class="nav-item">
					<form action="history.php" method="GET">
						<input type="submit" class="btn btn-sm btn-outline-secondary"  name="Histórico" value="Histórico">
						<input type="hidden" name="sensor" value="all">
					</form>
				</li>
			</ul>

			<form action="index.php" method="POST">
				<label><?php echo $_SESSION["username"] ?>&nbsp;&nbsp;</label>
				<input class="btn btn-sm btn-outline-dark" type="submit" name="logout" value="log-out">
			</form>
		</div>
	</nav>
	
	<!-- JUMBOTRON ALARM -->
	<div class="jumbotron">
		<h1>Alarme <span class="badge badge-pill badge-danger">Desativado</span></h1>
	</div>

	<!-- Card Table -->
	<div class="album py-5 bg-light">
		<div class="container">

			<div class="row row-cols-1 row-cols-sm-2 g-3">
				<div class="col">
				  <div class="card shadow-sm">
				    <div class="card-body-title">
				      <p class="card-text"><strong>ENTRADA</strong></p>
				      <div class="d-flex justify-content-between align-items-center">
				      </div>
				    </div>
				  </div>
				</div>
				<div class="col">
				  <div class="card shadow-sm">
				    <div class="card-body-title">
				      <p class="card-text"><strong>SAÍDA</strong></p>
				      <div class="d-flex justify-content-between align-items-center">
				      </div>
				    </div>
				  </div>
				</div>
				<div class="col">
				  <div class="card shadow-sm">

				    <img class="bd-placeholder-img card-img-top" preserveAspectRatio="xMidYMid slice" focusable="false" src="../img/porta.png">

				    <div class="card-body">
				      <p class="card-text-sub">Porta</p>
				      <div class="d-flex justify-content-between align-items-center">
				        <div class="btn-group">

						<form action="history.php" method="GET">
							<input type="submit" class="btn btn-sm btn-outline-secondary"  name="Histórico" value="Histórico">
							<input type="hidden" name="sensor" value="porta1">
						</form>

				        </div>
				        <small class="text-muted">2021/03/01 14:31</small>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="col">
				  <div class="card shadow-sm">

				    <img class="bd-placeholder-img card-img-top" preserveAspectRatio="xMidYMid slice" focusable="false" src="../img/porta.png">

				    <div class="card-body">
				      <p class="card-text-sub">Porta</p>
				      <div class="d-flex justify-content-between align-items-center">
				        <div class="btn-group">
				         	<form action="history.php" method="GET">
								<input type="submit" class="btn btn-sm btn-outline-secondary"  name="Histórico" value="Histórico">
							<input type="hidden" name="sensor" value="porta2">
							</form>
				        </div>
				        <small class="text-muted">2021/03/01 14:31</small>
				      </div>
				    </div>
				  </div>
				</div>
				<div class="col">
				  <div class="card shadow-sm">
				    <img class="bd-placeholder-img card-img-top" preserveAspectRatio="xMidYMid slice" focusable="false" src="../img/cctv.png">

				    <div class="card-body">
				      <p class="card-text-sub">Camera</p>
				      <div class="d-flex justify-content-between align-items-center">
				        <div class="btn-group">
				          	<form action="history.php" method="GET">
								<input type="submit" class="btn btn-sm btn-outline-secondary"  name="Histórico" value="Histórico">
							<input type="hidden" name="sensor" value="camera1">
							</form>
				        </div>
				        <small class="text-muted">2021/03/01 14:31</small>
				      </div>
				    </div>
				  </div>
				</div>
				<div class="col">
				  <div class="card shadow-sm">
				    <img class="bd-placeholder-img card-img-top" preserveAspectRatio="xMidYMid slice" focusable="false" src="../img/cctv.png">

				    <div class="card-body">
				      <p class="card-text-sub">Camera</p>
				      <div class="d-flex justify-content-between align-items-center">
				        <div class="btn-group">
				          	<form action="history.php" method="GET">
								<input type="submit" class="btn btn-sm btn-outline-secondary"  name="Histórico" value="Histórico">
							<input type="hidden" name="sensor" value="camera2">
							</form>
				        </div>
				        <small class="text-muted">2021/03/01 14:31</small>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="col">
				  <div class="card shadow-sm">
				    <img class="bd-placeholder-img card-img-top" preserveAspectRatio="xMidYMid slice" focusable="false" src="../img/sensor.png">

				    <div class="card-body">
				      <p class="card-text-sub">Sensor</p>
				      <div class="d-flex justify-content-between align-items-center">
				        <div class="btn-group">
				          	<form action="history.php" method="GET">
								<input type="submit" class="btn btn-sm btn-outline-secondary"  name="Histórico" value="Histórico">
							<input type="hidden" name="sensor" value="sensor1">
							</form>
				        </div>
				        <small class="text-muted">2021/03/01 14:31</small>
				      </div>
				    </div>
				  </div>
				</div>
				<div class="col">
				  <div class="card shadow-sm">
				    <img class="bd-placeholder-img card-img-top" preserveAspectRatio="xMidYMid slice" focusable="false" src="../img/sensor.png">

				    <div class="card-body">
				      <p class="card-text-sub">Sensor</p>
				      <div class="d-flex justify-content-between align-items-center">
				        <div class="btn-group">
				          	<form action="history.php" method="GET">
								<input type="submit" class="btn btn-sm btn-outline-secondary"  name="Histórico" value="Histórico">
							<input type="hidden" name="sensor" value="sensor2">
							</form>
				        </div>
				        <small class="text-muted">2021/03/01 14:31</small>
				      </div>
				    </div>
				  </div>
			</div>

		</div>
	</div>
	<br>
	<br>
	<!-- TABLE ACTUALIZATIONS-->
		<div class="container">
			<div class="card">
				<div class="card-header"><strong>Ultimas atualizações</strong></div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr class="tr-title">
								<th>Tipo de Dispositivo IoT</th>
								<th>Data de Atualização</th>
								<th>Estado Alertas</th>
							</tr>
						</thead>
						<tbody>
							<tr class="tr-info">
								<td>Porta #1</td>
								<td>2021/03/01 14:31</td>
								<td><span class="badge badge-pill badge-success">Fechado</span></td>
							</tr>
							<tr>
								<td>Porta #2 </td>
								<td>2021/03/01 14:31</td>
								<td><span class="badge badge-pill badge-danger">Aberta</span></td>
							</tr>
							<tr>
								<td>Sensor #1</td>
								<td>2021/03/01 14:31</td>
								<td><span class="badge badge-pill badge-warning">Detetou movimento</span></td>
							</tr>
							<tr>
								<td>Sensor #2</td>
								<td>2021/03/01 14:31</td>
								<td><span class="badge badge-pill badge-warning">Detetou movimento</span></td>
							</tr>
							<tr>
								<td>Camera #1</td>
								<td>2021/03/01 14:31</td>
								<td><span class="badge badge-pill badge-danger">Muito Forte</span></td>
							</tr>
							<tr>
								<td>Camera #2</td>
								<td>2021/03/01 14:31</td>
								<td><span class="badge badge-pill badge-danger">Muito Forte</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	<footer class="footer-dash">
  		<p><strong>Projeto TI - Engenharia Informática</strong></p>
	</footer>
</body>
</html>
