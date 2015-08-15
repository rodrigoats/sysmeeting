<?php include("../comum/header.php") ?>


	
<form id="formCadastroPalestra" class="form-horizontal" role="form" method="POST" action="/sysmeeting/controle/manterPalestraAction.php">

	<div class="form-group">
		<input type="hidden" name="operacao" value="incluir" />
		<label class="control-label col-sm-2" for="nome">Nome: </label>
		<div class="col-sm-10">
			<input	type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome" />
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="palestrante">Palestrante: </label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="palestrante" name="palestrante" placeholder="Digite o nome do Palestrante">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="data">Data: </label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="data" name="data" placeholder="Digite a data">
		</div>
	</div>

	<br /><br />
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Salvar</button>
		</div>
	</div>	

</form>

<?php include("../comum/footer.php") ?>