<?php
	include('conectar.php');
	//Buscar os dados do BD e listar 
	$lista = mysqli_query($conexao," SELECT * FROM produto");
?>
	<html>
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CONSULTA</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<div class="consulta">
		<h1 class="titulo-lista-produto">LISTA DE PRODUTOS CADASTRADOS</h1></br>
		<!--Inicio da Tabela do listar--> 
		<table>
			<tr>
				<td class="titulo-tabela">Nome</td>
				<td class="titulo-tabela">Marca</td>
				<td class="titulo-tabela">Modelo</td>
				<td class="titulo-tabela">Preço</td>
				<td class="btn-volta-lista"><a href="http://localhost/CRUD-sistema-cadastrar/index.php">Voltar</a></td>
			</tr>
			<!--While para buscar todos dados do BD e exibir da tela--> 
			<?php while ($dado = mysqli_fetch_array($lista)) {?>
				<tr>
					<td><?=$dado['nome'];?></td>
					<td><?=$dado['marca'];?></td>
					<td><?=$dado['modelo'];?></td>
					<td><?=$dado['preco'];?></td>
					<td align="center"><a class="btn-tabela"  href="editar.php?id=<?php echo $dado['id'];?> ">Editar</a></td>
					<td align="center"><a class="btn-tabela-excluir"  href="#" onclick="verificar(<?=$dado['id'];?>)">Excluir</a></td>
					</tr>
				<?php } ?>	
		</table>
	<!--Fim da Tabela do listar--> 
	</div>
	</body>
	</html>
	