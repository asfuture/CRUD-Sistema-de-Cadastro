<?php
	// Código capiturar os dados do BD e enviar para o formulário editar
	include("conectar.php");
	$ra = $_GET['id'];
	$resultado_dados = " SELECT * FROM produto WHERE  id= $ra";
	$resultado_bd = mysqli_query($conexao, $resultado_dados);
	$row_dados = mysqli_fetch_assoc($resultado_bd);
 ?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alteração de Produto</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<section>
		<div class="formulario-editar-produto">
			<h1 class="titulo-editar-produto">EDITAR  PRODUTO</h1>
			<br>
			<p class="p-editar-produto">Edite o seu produto.</p>
			<br>
			<!-- Formulário editar dados do BD.-->
			<form class="form-editar-produto" action="update.php" method="POST">
				<input type="number" name="ra" hidden="" value="<?php echo $row_dados['id']; ?>">
				<label for="txtNome">Nome:</label><input type="text" name="tNome" id="txtNome" maxlength="50" required value="<?php echo $row_dados['nome']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="txtMarca">Marca:</label><input type="text" name="tMarca" id="txtMarca" maxlength="50" required value="<?php echo $row_dados['marca']; ?>">
				<label for="txtModelo"><br><br>
				Modelo:</label><input type="text" name="tModelo" id="txtModelo" maxlength="50" required value="<?php echo $row_dados['modelo'] ;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="txtPreco">Preço:</label><input type="number" name="tPreco" id="txtPreco" required value="<?php echo $row_dados['preco']; ?>"><br><br>
				<label>Adicionar Link de fotos<input type="text" name="tLink" value="<?php echo $row_dados['link']; ?>"></label><br><br>
				<label for="txtArea">Descrição do produto</label><br>
				<textarea name="tArea" id="txtArea" cols="50" rows="5" value="<?php echo $row_dados['descricao']; ?>"></textarea><br><br>
				<input class="btn-salva-editar" type="submit" value="Salva"> 
			</form><br><br>
			<a href="http://localhost/CRUD-sistema-cadastrar/lista.php"><button class="btn-volta-editar">Voltar</button></a>
		</div>
	</section>
</body>
</html>