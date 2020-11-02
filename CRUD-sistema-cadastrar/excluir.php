<?php 
	include ('conectar.php');
		//Recebendo id do javascript.js para delete
		$recebe_id = $_GET["idexc"];
		//Deletendo no BD
		mysqli_query($conexao, " DELETE from produto where id= $recebe_id ");

		//Retornado para pagina lista.
 		header("location: lista.php");
    ?>