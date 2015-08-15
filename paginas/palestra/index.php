<?php 
	include("/var/www/html/sysmeeting/controle/manterPalestraControle.php");
	$id_palestra = $_GET['id_palestra'];

	listarPorPalestra($id_palestra);
 ?>