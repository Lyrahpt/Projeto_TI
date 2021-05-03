<?php
	header('Content-Type: text/html; charset=utf-8');
	//echo $_SERVER['REQUEST_METHOD'];
	//print_r($_POST);
	//var_dump(file_get_contents("php://input"));
	//set estado nos ficheiros como é suposto
	//adicionar ao log

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//echo "recebido um POST";
		if(isset($_POST["sensor"]) && isset($_POST["date"]) && isset($_POST["state"])){
			file_put_contents("../API/".$_POST["sensor"]."/date.txt", $_POST["date"]);
			file_put_contents("../API/".$_POST["sensor"]."/state.txt", $_POST["state"]);
			$logString=$_POST["sensor"]."|".$_POST["date"]."|".$_POST["stateType"]."|".$_POST["state"];
			file_put_contents("../API/log.txt",$logString . PHP_EOL, FILE_APPEND);
			exit();
		}
		else{
			echo "ERRO: Parâmetros inválidos";
			exit();
		}
	}
	elseif($_SERVER["REQUEST_METHOD"] == "GET"){
		echo "recebido um GET";

	}
	else{
		//http_response_code(403);
		echo "metodo nao permitido";
		exit();
	}

?>