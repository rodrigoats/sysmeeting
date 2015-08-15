<?php 
	include("../comum/header.php"); 
	include("/var/www/html/sysmeeting/controle/manterParticipanteControle.php");
	//listarPalestras();
	?>

	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<table class="table table-striped" cellspacing="0" cellpadding="0">
				<thead>
					<th>ID</th>
					<th>Documento</th>
					<th>Nome</th>
					<th class="actions">Ações</th>
				</thead>
				<tbody>
					<?php listarTodosParticipantes();?>	
				</tbody>
			</table>
		</div>
		
	</div>

	
<?php include("../comum/footer.php") ?>