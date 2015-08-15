<?php 
	include("/var/www/html/sysmeeting/modelo/dados/conexao/conexao.php");
	
	function criarPalestra($nome, $palestrante, $data){

		$sql = "INSERT INTO palestra (nome, paletrante, data) VALUES('$nome', '$palestrante', '$data')";
		
		$query = mysql_query($sql);
		
		if($query >= 1)
			echo "Cadastrado com sucesso";
		else
			echo "Ocorreu algum erro";
	}

	function alterarPalestra($id_palestra, $nome, $palestrante, $data){
		echo "Alterar Palestra: $id_palestra, $nome, $palestrante, $data";
	}

	function deletarPalestra($id_palestra){
		echo "Deletar Palestra: $id_palestra";
	}

	function listarPalestras(){
		$sql = "SELECT id, nome, paletrante, data FROM palestra";
		$query = mysql_query($sql);

		while ($dados = mysql_fetch_array($query)) {?>
	
				<tr>
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['paletrante']; ?></td>
					<td><?php echo $dados['data']; ?></td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="/sysmeeting/paginas/palestra/index.php?id_palestra=<?php echo $dados['id']; ?>">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="">Editar</a>
						<a class="btn btn-danger btn-xs" href="">Excluir</a>
					</td>
				</tr>
			
		<?php
		}

	}

	function selectPalestras(){
		$sql = "SELECT id, nome, paletrante, data FROM palestra";
		$query = mysql_query($sql);

		while ($dados = mysql_fetch_array($query)) {

			?>

				<option value="<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></option>	
				<!-- <tr>
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['paletrante']; ?></td>
					<td><?php echo $dados['data']; ?></td>
					<td class="actions">
						<a class="btn btn-success btn-xs" href="">Visualizar</a>
						<a class="btn btn-warning btn-xs" href="">Editar</a>
						<a class="btn btn-danger btn-xs" href="">Excluir</a>
					</td>
				</tr>
			 -->
		<?php
		}

	}

	function listarPalestra($id_palestra){
		echo "listar Uma Palestra: $id_palestra";
	}

	

 ?>