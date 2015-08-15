<?php 
	include("comum/header.php"); 
	//include("/sysmeeting/modelo/exemplos/login.php");
	?>

<form id="formLogin" class="form-horizontal" role="form" method="POST" action="/sysmeeting/modelo/exemplos/login.php">

	<div class="form-group">
		<label class="control-label col-sm-2" for="nome">Nome: </label>
		<div class="col-sm-10">
			<input	type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome" />
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Senha: </label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="pwd" name="senha" placeholder="Digite a senha">
		</div>
	</div>

	<br /><br />
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default" name="submit">Enviar</button>
		</div>
	</div>	

</form>

<?php include("comum/footer.php") ?>