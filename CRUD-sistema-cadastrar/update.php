<?php
include('conectar.php');
	//Recebimentos dos dados enviado do formulário editar
	$id = $_POST['ra'];
	$Nome = $_POST['tNome'];
	$Marca = $_POST['tMarca'];
	$Modelo = $_POST['tModelo'];
	$Preco = $_POST['tPreco'];
	$Link = $_POST['tLink'];
	$Descricao = $_POST['TArea'];

		//Atualizando o BD
 		$resultado_dados = " UPDATE produto SET 
             nome = '$Nome', marca ='$Marca', modelo = '$Modelo',preco='$Preco',link='$Link',descricao='$Descrica' where id= $id";
   		 mysqli_query($conexao, $resultado_dados);

   		 //Retornando a pagina Lista
   		header('location:lista.php');
    	mysqli_close($conexao);
?>
</body>
</html>