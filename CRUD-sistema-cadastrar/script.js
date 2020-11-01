//Função para enviar id para a pagina excluir.php e delete no BD.
function verificar(recid) {
	if (confirm("Tem certeza que deseja excluir permanentemente este cadastro?")) {
			window.location ="excluir.php? idexc=" + recid;
			}
}


