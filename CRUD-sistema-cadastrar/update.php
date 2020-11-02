<?php
include('conectar.php');
	//Recebimentos dos dados enviado do formulário editar
	$id = $_POST['ra'];
	$Nome = $_POST['tNome'];
	$Marca = $_POST['tMarca'];
	$Modelo = $_POST['tModelo'];
	$Preco = $_POST['tPreco'];
	$Link = $_POST['tLink'];
	$Descricao = $_POST['tArea'];

		//Atualizando o BD
 		$resultado_dados = " UPDATE produto SET 
            nome = '$Nome', marca ='$Marca', modelo = '$Modelo',preco='$Preco',link='$Link',descricao ='$Descricao' where id= $id";
   		
   		//Verifição de alteração do INSERT INTO do BD
   		 if ($conexao -> query($resultado_dados) === TRUE) {
			echo "Produto alterado com sucesso";
		}else{
			echo "Error".$resultado_dados."<br>".$conexao->error;
		}
   		 //Retornando a pagina Lista
   		header('location:lista.php');
    	mysqli_close($conexao);
?>
</body>
</html>