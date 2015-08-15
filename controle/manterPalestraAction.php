<?php 
	include("/var/www/html/sysmeeting/modelo/servicos/manterPalestra.php");

	$operacao = $_POST['operacao'];

	if(isset($_POST['nome']))
		$nome = $_POST['nome'];
	if(isset($_POST['palestrante']))
		$palestrante = $_POST['palestrante'];
	if(isset($_POST['data']))
		$data = $_POST['data'];
	
	
	if($operacao == 'incluir'){
		
		if(isset($nome) && isset($palestrante) && isset($data)){
			salvarPalestra(null, $nome, $palestrante, $data);
		} else {
			echo "Faltou informar algum campo";
		}
	}
	
 ?>