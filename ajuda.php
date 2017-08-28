<?php
	session_start();
	require_once("includes/conectar.inc");
?>

<!DOCTYPE html>
<html lang="pt">

  <head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Bruno Nobrega">
	<link rel="icon" href="imagens/favicon.ico">
	
	<title>Valemobi</title>
	
	<!-- Css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Jquery -->
	<script src="js/jquery.js"></script>
	
	<?php
	
	$sqlCompras = "SELECT * FROM TB_MERCADORIA WHERE TIPO_NEGOCIO = 'Compra'";
	$resultadoCompras = $conecta->query($sqlCompras);
	$num_compras = mysqli_num_rows($resultadoCompras);
	
	$sqlVendas = "SELECT * FROM TB_MERCADORIA WHERE TIPO_NEGOCIO = 'Venda'";
	$resultadoVendas = $conecta->query($sqlVendas);
	$num_vendas = mysqli_num_rows($resultadoVendas);
	
	$totalOperacoes = $num_compras + $num_vendas;
	
	mysqli_close($conecta);
	?>
	
  </head>

  <body>
	
	<!-- Navbar / Barra de Navegação -->
		
	<?php include_once "estrutura/navbar.php"; ?>	
	
	<!-- Content / Conteúdo -->
	
	<div class="container-fluid">
		<div class="row">
		  <div class="conteudo">
		
		   <div class="col-sm-offset-3 col-sm-6">
			<div class="panel panel-default">
			 <div class="panel-heading">
				<h4><strong>Bibliotecas e Linguagens Utilizadas no Projeto</strong></h4>
			 </div>
			 <div class="panel-body">
			   <center>
				<a href="https://www.javascript.com/" target="_blank"><img src="imagens/js-logo.png" style="width: 15%;"></img></a>
				<a href="https://jquery.com/" target="_blank"><img class="col-sm-offset-1" src="imagens/jquery-logo.png" style="width: 40%;"></img></a><br><br>
				<a href="https://www.mysql.com/" target="_blank"><img src="imagens/mysql-logo.png" style="width: 30%;"></img></a>
				<a href="https://secure.php.net/" target="_blank"><img class="col-sm-offset-1" src="imagens/php-logo.png" style="width: 28%;"></img></a><br><br>
				<a href="http://getbootstrap.com/" target="_blank"><img src="imagens/bootstrap-logo.png" style="width: 33%;"></img></a>
				<img class="col-sm-offset-1" src="imagens/html5-logo.png" style="width: 29%;"></img>
				<img class="col-sm-offset-1" src="imagens/css3-logo.png" style="width: 20%;"></img>
			   </center>

			 </div> <!-- fim panel-body -->
			</div> <!-- fim panel -->
			</div>
				
		  </div>
		<!-- Footer / Rodape -->
		
		<?php include_once "estrutura/footer.php"; ?>
		
		</div>
	</div>
	
	<!-- Scripts -->

	<script src="js/bootstrap.min.js"></script>
	
  </body>
</html>