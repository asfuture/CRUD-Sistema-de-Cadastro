<?php
//Conexão do banco de dados com o cadastro_produto.
	$Server = "localhost";
	$User = "root";
	
	$Password = "";
	$BD_cadastro = "cadastro_produto";

	$conexao =  mysqli_connect($Server,$User,$Password,$BD_cadastro);
	
?>