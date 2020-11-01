<?php
include('conectar.php');
	
	//Rebecendo dados do formulário cadastra
	$Nome = $_POST['Nome'];
	$Marca = $_POST['Marca'];
	$Modelo = $_POST['Modelo'];
	$Preco = $_POST['Preco'];
	$Link = $_POST['Link'];
	$Descricao = $_POST['Area'];

	//Enviando dados do formulário cadastra para o BD
		$incluir = "INSERT INTO produto (nome,marca,modelo,preco,link,descricao) VALUES ('$Nome','$Marca','$Modelo','$Preco','$Link','$Descricao')";
		mysqli_query($conexao, $incluir);
	 //Retornando a pagina formulário(pagina cadastrar)
		header('location:formulario.php');
		mysqli_close($conexao);
?>