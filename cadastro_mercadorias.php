<?php
	session_start();
	require_once("includes/conectar.inc");
	
	
	
	$codigoForm = $_POST ['codigoMerc'];
	$tipoForm = $_POST ['tipoMerc'];
	$nomeForm = $_POST ['nomeMerc'];
	$quantidadeForm = $_POST ['qtdMerc'];
	$precoForm = floatval(number_format($_POST ['precoMerc'],"2",",","."));
	$negociacaoForm = $_POST ['tipoNeg'];
	
	$sql = "INSERT INTO TB_MERCADORIA (CODIGO_MERCADORIA, TIPO_MERCADORIA, NOME_MERCADORIA, QUANTIDADE_MERCADORIA, PRECO_MERCADORIA, TIPO_NEGOCIO)
					VALUES ('$codigoForm', '$tipoForm', '$nomeForm', '$quantidadeForm',$precoForm,'$negociacaoForm')";
	
	if (mysqli_query($conecta, $sql)) {
    echo "<script>alert('Cadastro de Mercadoria efeutado com sucesso!');</script>";
	//echo "<script>location.href='cadastrar.php';</script>;"
	} else {
		echo "<script>alert('Falha: " . $sql . "')" . mysqli_error($conecta);
	}
	
	mysqli_close($conecta);
	
	echo "<script>location.href='cadastrar.php';</script>";
	/*print_r($precoForm);*/
?>