<?php 
	include("../comum/header.php");
	include("/var/www/html/sysmeeting/controle/manterParticipanteControle.php");?>

<form id="formCadastroParticipante" class="form-horizontal" role="form" method="POST" action="/sysmeeting/controle/manterParticipanteAction.php">
	<input type="hidden" name="operacao" value="incluir" />

	<div class="form-group">
		<label class="control-label col-sm-2" for="nome">Palestra: </label>
		<div class="col-sm-10">
			<!-- <input	type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome" /> -->
			<select class="form-control" name="palestra" >
				<?php montarSelectPalestras(); ?>
			</select>
		</div>
	</div>
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
	<div class="form-group">
		<label class="control-label col-sm-2" for="documento">Documento: </label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="documento" name="documento" placeholder="Digite o número do documento">
		</div>
	</div>

	<br /><br />
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default" name="submit">Enviar</button>
		</div>
	</div>	

</form>

<?php include("../comum/footer.php") ?>