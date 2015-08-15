<?php 

	$servidor = 'localhost';
	$usuario = 'root';
	$senha = 'root';
	$nome_banco = 'sysmeetingdb';

	$conexao = mysql_connect($servidor, $usuario, $senha);

	$banco = mysql_select_db($nome_banco);

	if(mysql_error()){
		echo "Ocorreu um erro: ".mysql_error();
	} else{
		//echo "conectou";
		
	}


 ?>