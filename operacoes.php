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
	
	<!-- Scripts -->
	
	<!-- Query BD para listar Operações das Mercadorias -->
	
	<?php
	
	$sqlOperacoes = "SELECT * FROM TB_MERCADORIA";
	$resultadoOperacoes = $conecta->query($sqlOperacoes);
	
	$sqlVendas = "SELECT * FROM TB_MERCADORIA WHERE TIPO_NEGOCIO = 'Venda'";
	$resultadoVendas = $conecta->query($sqlVendas);
	
	$sqlCompras = "SELECT * FROM TB_MERCADORIA WHERE TIPO_NEGOCIO = 'Compra'";
	$resultadoCompras = $conecta->query($sqlCompras);
	
	mysqli_close($conecta);
	?>
	
	<!-- Jquery -->
	<script type="text/javascript" src="js/jquery.js" ></script>
    <script type="text/javascript" src="js/jquery.maskMoney.js" ></script>
	
	<script type="text/javascript">
        $(document).ready(function(){
              $("input.reaisMask").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:".", allowZero:false, allowNegative:false});
        });
    </script>
	
  </head>

  <body>
	
	<!-- Navbar / Barra de Navegação -->
		
	<?php include_once "estrutura/navbar.php"; ?>	
	
	<!-- Content / Conteúdo -->
	
	<div class="container-fluid">
		<div class="row">	  
		 <div class="conteudo">
		  <div class="panel panel-default op">
			<ul class="nav nav-tabs">
				<li class="active" role="presentation"><a data-toggle="tab" href="#operacoes">Mercadorias</a></li>
				<li role="presentation"><a data-toggle="tab" href="#vendas">Vendidas</a></li>
				<li role="presentation"><a data-toggle="tab" href="#compras">Compradas</a></li>
			</ul>
		
		
		<!-- Tabela Operações -->
		<div class="tab-content">
		  <div id="operacoes" class="tab-pane fade in active">
		   <table class="table table-striped">
			<thead>
				<tr>
				 <th>Código</th>
				 <th>Tipo Mercadoria</th>
				 <th>Nome Mercadoria</th>
				 <th>Quantidade</th>
				 <th>Preço</th>
				 <th>Operação</th>
				</tr>
			</thead>
			<tbody>
				
				<?php
				//Listando Operações/Mercadorias
				if($resultadoOperacoes->num_rows > 0){
					while($mercadoria = $resultadoOperacoes->fetch_assoc()){
						echo"
						<tr>
						 <td>" .$mercadoria['CODIGO_MERCADORIA']. "</td>
						 <td>" .$mercadoria['TIPO_MERCADORIA']. "</td>
						 <td>" .$mercadoria['NOME_MERCADORIA']. "</td>
						 <td>" .$mercadoria['QUANTIDADE_MERCADORIA']. "</td>
						 <td>R$ " .$mercadoria['PRECO_MERCADORIA']. "</td>
						 <td>" .$mercadoria['TIPO_NEGOCIO']. "</td>
						</tr>
						";
					} //fim while
				} //fim if
				
				?>
				
			</tbody>
		   </table>	
		</div>
		
		<!-- Vendas -->
		  <div id="vendas" class="tab-pane fade">
		<table class="table table-striped">
			<thead>
				<tr>
				 <th>Código</th>
				 <th>Tipo Mercadoria</th>
				 <th>Nome Mercadoria</th>
				 <th>Quantidade</th>
				 <th>Preço</th>
				</tr>
			</thead>
			<tbody>
				
				<?php
				//Listando Operações/Mercadorias
				if($resultadoOperacoes->num_rows > 0){
					while($mercadoria = $resultadoVendas->fetch_assoc()){
						echo"
						<tr>
						 <td>" .$mercadoria['CODIGO_MERCADORIA']. "</td>
						 <td>" .$mercadoria['TIPO_MERCADORIA']. "</td>
						 <td>" .$mercadoria['NOME_MERCADORIA']. "</td>
						 <td>" .$mercadoria['QUANTIDADE_MERCADORIA']. "</td>
						 <td>R$ " .$mercadoria['PRECO_MERCADORIA']. "</td>
						</tr>
						";
					} //fim while
				} //fim if
				?>
				
			</tbody>
		  </table>
		  </div>
		
		  <!-- Compras -->
		  <div id="compras" class="tab-pane fade">
		  <table class="table table-striped">
			<thead>
				<tr>
				 <th>Código</th>
				 <th>Tipo Mercadoria</th>
				 <th>Nome Mercadoria</th>
				 <th>Quantidade</th>
				 <th>Preço</th>
				</tr>
			</thead>
			<tbody>
				
				<?php
				//Listando Operações/Mercadorias
				if($resultadoOperacoes->num_rows > 0){
					while($mercadoria = $resultadoCompras->fetch_assoc()){
						echo"
						<tr>
						 <td>" .$mercadoria['CODIGO_MERCADORIA']. "</td>
						 <td>" .$mercadoria['TIPO_MERCADORIA']. "</td>
						 <td>" .$mercadoria['NOME_MERCADORIA']. "</td>
						 <td>" .$mercadoria['QUANTIDADE_MERCADORIA']. "</td>
						 <td>R$ " .$mercadoria['PRECO_MERCADORIA']. "</td>
						</tr>
						";
					} //fim while
				} //fim if
				?>
				
			</tbody>
		  </table>
		  </div>
		</div>
		  
		  </div>
		<!-- Footer / Rodape -->
		
		<?php include_once "estrutura/footer.php"; ?>
		
		 </div>
		</div>
	</div>
	
	<!-- Scripts -->
	
	<script src="js/bootstrap.min.js"></script>
	
  </body>
</html>