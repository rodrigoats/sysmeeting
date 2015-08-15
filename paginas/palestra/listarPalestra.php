<?php 
	include("../comum/header.php"); 
	include("/var/www/html/sysmeeting/controle/manterPalestraControle.php");
	//listarPalestras();
	?>

	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<table class="table table-striped" cellspacing="0" cellpadding="0">
				<thead>
					<th>ID</th>
					<th>Nome</th>
					<th>Palestrante</th>
					<th>Data</th>
					<th class="actions">Ações</th>
				</thead>
				<tbody>
					<?php listarTodasPalestras()?>	
				</tbody>
			</table>
		</div>
		
	</div>

	
<?php include("../comum/footer.php") ?>