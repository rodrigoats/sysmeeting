<?php
	include("/var/www/html/sysmeeting/modelo/dados/conexao/conexao.php");

	function criarParticipante($nome, $senha, $documento, $id_palestra){
		$sql = "INSERT INTO participante (nome, senha, documento, id_palestra) 
				VALUES('$nome', '$senha', '$documento', '$id_palestra')";
		
		$query = mysql_query($sql);
		
		if(mysql_error()){
			echo "Ocorreu um erro: ".mysql_error();
		}

	}

	function alterarParticipante($id_participante, $nome, $senha, $documento, $id_palestra){

	}

	function deletarParticipante($id_participante){

	}

	function listarParticipantes(){
		$sql = "SELECT * FROM participante";
		$query = mysql_query($sql);

		while ($dados = mysql_fetch_array($query)) {?>
	
				<tr>
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['documento']; ?></td>
					<td><?php echo $dados['nome']; ?></td>
					
					<td class="actions">
						<a class="btn btn-success btn-xs" href="">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="">Editar</a>
						<a class="btn btn-danger btn-xs" href="">Excluir</a>
					</td>
				</tr>
			
		<?php
		}


	}

	function listarParticipante($id_participante){
		
	}

	function exibirParticipante($id_palestra){
		$sql = 'SELECT * FROM participante WHERE id_palestra = '.$id_palestra;

		$query = mysql_query($sql);

		while ($dados = mysql_fetch_array($query)) {?>
	
			<tr>
				<td><?php echo $dados['id']; ?></td>
				<td><?php echo $dados['documento']; ?></td>
				<td><?php echo $dados['nome']; ?></td>
				
				<td class="actions">
					<a class="btn btn-success btn-xs" href="">Visualizar</a>
					<a class="btn btn-warning btn-xs" href="">Editar</a>
					<a class="btn btn-danger btn-xs" href="">Excluir</a>
				</td>
			</tr>
			
		<?php
		}
	}
?>
