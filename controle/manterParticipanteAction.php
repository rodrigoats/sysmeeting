<?php 
	include("/var/www/html/sysmeeting/modelo/servicos/manterParticipante.php");

	$operacao = $_POST['operacao'];

	if(isset($_POST['nome']))
		$nome = $_POST['nome'];
	if(isset($_POST['senha']))
		$senha = $_POST['senha'];
	if(isset($_POST['documento']))
		$documento = $_POST['documento'];
	if(isset($_POST['palestra']))
		$id_palestra = $_POST['palestra'];

	
	
	if($operacao == 'incluir'){
		
		if(isset($nome) && isset($senha) && isset($documento)){
			salvarParticipante(null, $nome, $senha, $documento, $id_palestra);
		} else {
			echo "Faltou informar algum campo";
		}
	}
	
 ?>