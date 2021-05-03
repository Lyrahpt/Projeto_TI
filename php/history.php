<?php 

	if (isset($_GET["sensor"]))
	{
		$sensor=$_GET["sensor"];

		$file = file("../txt/API/log.txt");

	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>4URsecurity</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<header class="header-history">
  		<h2><strong>Welcome to 4UrSecurity</strong></h2>
  		<h5>Servidor IoT</h5>
	</header>
	<br>
	<br>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Tipo de Dispositivo IoT</th>
							<th>Data de Atualização</th>
							<th>Estado Alertas</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							foreach ($file as $key => $value) {
								$sensorData = explode('|',trim($value));
								if (((strtolower($sensorData[0]))!=(strtolower($sensor))) and ((strtolower($sensor)!="all")))
								{
									continue;
								}
								echo "<tr>";
								echo 	"<td>".$sensorData[0]."</td>";
								echo 	"<td>".$sensorData[1]."</td>";
								echo 	"<td><span class='badge badge-pill badge-".$sensorData[2]."'>".$sensorData[3]."</span></td>";
								//logic here to change class type
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<footer class="footer-history">
  		<p><strong>Projeto TI - Engenharia Informática</strong></p>
	</footer>
</body>
</html>

