<?php 

	$nome = isset($_POST['nome']);
	$senha = isset($_POST['senha']);

	if(isset($logado) && !$logado){

		if($nome != "" && $senha != '' ){
			
			if($nome == 'admin' && $senha == '1234'){

				$logado = true;
				echo "Redirecionar pra página home";

			}	else {
				$logado = false;
				echo "Emitir mensagem de erro ao login";
			}
		}
	} else {
		//echo "direcionar para home direto";
	}


 ?>