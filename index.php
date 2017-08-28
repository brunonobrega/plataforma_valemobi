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
				<h4><strong>VM System</strong></h4>
			 </div>
			 <div class="panel-body">
			 
				  <div class="form-group col-sm-4">
					<h4>Total</h4>
					<div class="btn_sub">
					  <a href="operacoes.php" class="btn btn-success btn-lg botao-index" role="button">
					  <?php echo "$totalOperacoes";?> </a>
					</div>
				  </div>
				  
				  <div class="form-group col-sm-4">
					<h4>Vendas</h4>
					<div class="btn_sub">
					  <a href="vendidas.php" class="btn btn-success btn-lg botao-index" role="button">
					  <?php echo "$num_vendas";?> </a>
					</div>
				  </div>
				  
				  <div class="form-group col-sm-4">
					<h4>Compras</h4>
					<div class="btn_sub">
					  <a href="compradas.php" class="btn btn-success btn-lg botao-index" role="button">
					  <?php echo "$num_compras";?> </a>
					</div>
				  </div>
				
				  <div class="form-group">
					<div class="btn_sub">
					  <a href="operacoes.php" class="btn btn-danger btn-lg botao-index" role="button">Visualizar Mercadorias</a>
					</div>
				  </div>
				  <div class="form-group">
					<div class="btn_sub">
					  <a href="cadastrar.php" class="btn btn-primary btn-lg botao-index" role="button">Cadastrar uma Mercadoria</a>
					</div>
				  </div>

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