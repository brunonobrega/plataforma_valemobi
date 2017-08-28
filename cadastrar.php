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
	
	<script language="javascript" type="text/javascript">
		function validar(){
			var codigo = formCadastro.codigoMerc.value;
			var tipoMerc = formCadastro.tipoMerc.value;
			var nome = formCadastro.nomeMerc.value;
			var quantidade = formCadastro.qtdMerc.value;
			var preco = formCadastro.precoMerc.value;
			var tipoNeg = formCadastro.tipoNeg.value;
			
			
			if (codigo == ""){
				alert('Preencha o campo Código!');
				formCadastro.codigoMerc.focus();
				return false;
			}else if (isNaN(formCadastro.codigoMerc.value)){
				alert('Digite apenas números no campo Código!');
				formCadastro.codigoMerc.focus;
				return false;
				}
			if (tipoMerc == "" || tipoMerc == "-- Selecione o tipo da Mercadoria --"){
				alert('Selecione o Tipo da Mercadoria!');
				formCadastro.tipoMerc.focus();
				return false;
			}
			if (nome.length < 3){
				alert('Preencha o campo Nome da Mercadoria com no mínimo 3 caracteres!');
				formCadastro.nomeMerc.focus();
				return false;
			}
			if (quantidade <= 0 || quantidade >= 1000){
				alert('A quantidade mínima é 1 e a máxima é 999!');
				formCadastro.qtdMerc.focus();
				return false;
			}
			if (preco <= 0){
				alert('A mercadoria não pode ter Preço R$0,00!');
				return false;
			}
			if (tipoNeg == "" || tipoNeg == "-- Selecione o tipo da Negociação --"){
				alert('Selecione o Tipo da Negociação!');
				formCadastro.tipoNeg.focus();
				return false;
			}
		}
	</script>
	
	<!-- Jquery -->
	<script type="text/javascript" src="js/jquery.js" ></script>
	
  </head>

  <body>
	
	<!-- Navbar / Barra de Navegação -->
		
	<?php include_once "estrutura/navbar.php"; ?>	
	
	<!-- Content / Conteúdo -->
	
	<div class="container-fluid">
		<div class="row">
		 <div class="conteudo">
		 		 
			<div class="col-sm-offset-3 col-xs-12 col-sm-6">
			<div class="panel panel-default">
			 <div class="panel-heading">
				<h4><strong>Cadastrar Mercadoria</strong></h4>
			 </div>
			 <div class="panel-body">
			  <form class="form-horizontal " name="formCadastro" action="cadastro_mercadorias.php" method="post">
				  <div class="form-group">
					<label for="codigoMerc" class="col-xs-12 col-sm-4 control-label">Código</label>
					<div class="col-xs-12  col-sm-4">
					  <input type="text" class="form-control" id="codigoMerc" name="codigoMerc" placeholder="Código Mercadoria">
					</div>
				  </div>
				  <div class="form-group">
					<label for="tipoMerc" class="col-xs-12  col-sm-4 control-label">Tipo da Mercadoria</label>
					<div class="col-xs-12  col-sm-8">
					  <select name="tipoMerc" id="tipoMerc" class="form-control">
					   <option>-- Selecione o tipo da Mercadoria --</option>
					   <option></option>
					   <option>Automotivos</option>
					   <option>Brinquedos</option>
					   <option>Celulares</option>
					   <option>Decoração</option>
					   <option>Diversos</option>
					   <option>Eletrodomésticos</option>
					   <option>Games</option>
					   <option>Informática</option>
					   <option>Livros</option>
					   <option>Móveis</option>
					   <option>Outros</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="nomeMerc" class="col-xs-12  col-sm-4 control-label">Nome da Mercadoria</label>
					<div class="col-xs-12  col-sm-8">
					  <input type="text" class="form-control" id="nomeMerc" name="nomeMerc" placeholder="Digite o nome da mercadoria..">
					</div>
				  </div>
				  <div class="form-group">
					<label for="qtdMerc" class="col-xs-12  col-sm-4 control-label">Quantidade</label>
					<div class="col-xs-12  col-sm-8">
					  <input type="number" class="form-control" id="qtdMerc" name="qtdMerc" placeholder="Quantidade da mercadoria..">
					</div>
				  </div>
				  <div class="form-group">
					<label for="precoMerc" class="col-xs-12  col-sm-4 control-label">Preço</label>
					<div class="col-xs-12  col-sm-8">
					  <input type="number" step="0.01" class="form-control" id="precoMerc" name="precoMerc" placeholder="R$0,00">
					</div>
				  </div>
				  <div class="form-group">
					<label for="tipoNeg" class="col-xs-12  col-sm-4 control-label">Tipo da Negociação</label>
					<div class="col-xs-12  col-sm-8">
					  <select name="tipoNeg" id="tipoNeg" class="form-control">
					   <option>-- Selecione o tipo da Negociação --</option>
					   <option></option>
					   <option>Compra</option>
					   <option>Venda</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<div class="btn_sub">
					  <button type="submit" id="btn_cadastro" class="btn btn-primary btn-lg" onclick="return validar()">Cadastrar</button>
					</div>
				  </div>
			  </form>
			 </div> <!-- fim panel-body -->
			</div> <!-- fim panel -->
			</div>
		 </div> <!-- fim conteúdo -->
		  
		<!-- Footer / Rodape -->
		
		<?php include_once "estrutura/footer.php"; ?>
		
		</div>
	</div>
	
	<!-- Scripts -->
	
	<script src="js/bootstrap.min.js"></script>
	
  </body>
</html>