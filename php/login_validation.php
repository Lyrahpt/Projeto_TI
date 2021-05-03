<?php 

	if(isset($_POST["username"]) && isset($_POST["password"]))
	{

		//check if username is valid
		$credentialsFile = file("../txt/credentials.txt");
		foreach ($credentialsFile as $key => $value) {
			
			//file is "username password type"
			$credentials = explode(' ',trim($value));


			if ($_POST["username"]==$credentials[0] && $_POST["password"]==$credentials[1])
			{
				session_start();
				$_SESSION["username"]=$credentials[0];
				$_SESSION["password"]=$credentials[1];
				$_SESSION["type"]=$credentials[2];
				header("location: dashboard.php");
				die();
			}
		}
		header("location: index.php?ERRO=0");
	}
	else
	{
		header("location: index.php?ERRO=1");
	}
	

?>