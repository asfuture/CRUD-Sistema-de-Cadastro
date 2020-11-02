<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de Produto</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<section>
		<div class="formulario-cadastro-produto">
			<h1 class="titulo-cadastro-produto">CADASTRO DE PRODUTO</h1>
			<br>
			<p class="p-formulario">Preencha o formulário para cadastrar o produto.</p>
			<br>
			<!--formulário para cadastra produto-->
			<form action="inserir.php" method="POST">
				
				<label for="txtNome">Nome:</label><input type="text" name="Nome" id="txtNome" maxlength="50" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="txtMarca">Marca:</label><input type="text" name="Marca" id="txtMarca" maxlength="50" required="">
				<label for="txtModelo"> <br><br>
				Modelo:</label><input type="text" name="Modelo" id="txtModelo" maxlength="50" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="txtPreco">Preço:</label><input type="number" name="Preco" id="txtPreco" required=""><br><br>
				<label>Adicionar Link de fotos<input type="text" name="Link"></label><br><br>
				<label for="txtArea">Descrição do produto</label><br>
				<textarea name="Area" id="txtArea" cols="50" rows="5"></textarea><br><br>
				<!--Botão Salvar-->
				<input class="btn-salva-cadastro" type="submit" value="Salva">
			</form>
				<!--Botão Voltar-->
			<a href="http://localhost/CRUD-sistema-cadastrar/index.php"><button class="btn-volta-cadastro">Voltar</button></a> 
		</div>
	</section>
</body>
</html>