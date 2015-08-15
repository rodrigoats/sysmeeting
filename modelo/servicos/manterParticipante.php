<?php

	include("/var/www/html/sysmeeting/modelo/dados/dao/manterParticipanteDao.php");
	include("/var/www/html/sysmeeting/modelo/dados/dao/manterPalestraDao.php");

	function salvarParticipante($id_participante, $nome, $senha, $documento, $id_palestra){
		
		

		if(!isset($id_participante) || $id_participante == null){
			criarParticipante($nome, $senha, $documento, $id_palestra);
		} else {
			alterarParticipante($id_participante, $nome, $senha, $documento, $id_palestra);
		}
	}

	function excluirParticipante($id_participante){

	}

	function listarTodosParticipantes(){
		listarParticipantes();
	}

	function listarParticipantePorId($id_participante){
		
	}

	function montarSelectPalestras(){
		selectPalestras();
	}
?>
