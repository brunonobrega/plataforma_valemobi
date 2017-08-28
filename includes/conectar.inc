<?php 
	
	$servername = "localhost";
	$username = "bit2b365_BRUNO";
	$password = "valemobi@2017";
	$dbname = "bit2b365_VALEMOBI";

	// Criar conexao
	$conecta = mysqli_connect($servername, $username, $password, $dbname);
	mysqli_set_charset($conecta, "UTF8");
	// Verificar Conexao
	if ($conecta->connect_error) {
		die("Falha na conexão: " . $conecta->connect_error);
	} 
?>