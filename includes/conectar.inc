<?php 
	
	$servername = "localhost";
	$username = "bruno";
	$password = "aJ7xlxnLDeANnKc@";
	$dbname = "valemobi";

	// Criar conexao
	$conecta = mysqli_connect($servername, $username, $password, $dbname);
	mysqli_set_charset($conecta, "UTF8");
	// Verificar Conexao
	if ($conecta->connect_error) {
		die("Falha na conexão: " . $conecta->connect_error);
	} 
?>