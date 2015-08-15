<?php 

	include("/var/www/html/sysmeeting/modelo/dados/dao/manterPalestraDao.php");

	function salvarPalestra($id_palestra, $nome, $palestrante, $data){

		if(!isset($id_palestra) || $id_palestra == null){
			criarPalestra($nome, $palestrante, $data);
		} else {
			alterarPalestra($id_palestra, $nome, $palestrante, $data);
		}
	}

	function excluirPalestra($id_palestra){
		deletarPalestra($id_palestra);
	}

	function listarTodasPalestras(){
		listarPalestras();
	}

	function listarPorId($id_palestra){
		listarPalestra($id_palestra);
	}

	function listarPorPalestra($id_palestra){
		exibirParticipante($id_palestra)
	}


 ?>