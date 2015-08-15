<?php 
	//include("/var/www/html/sysmeeting/modelo/utils.php");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>SySMeeting</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale-1">
 	<link rel="stylesheet" type="text/css" href="/sysmeeting/estilos/bootstrap-theme.css">
 	<link rel="stylesheet" type="text/css" href="/sysmeeting/estilos/bootstrap-theme.min.css">
 	<link rel="stylesheet" type="text/css" href="/sysmeeting/estilos/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="/sysmeeting/estilos/bootstrap.min.css">
 	
 	<script type="text/javascript" src="/sysmeeting/scripts/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="/sysmeeting/scripts/jquery.sticky.js"></script>
	<script type="text/javascript" src="/sysmeeting/scripts/bootstrap.js"></script>
	<script type="text/javascript" src="/sysmeeting/scripts/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.dropdown-toggle').dropdown();
		});
	</script>
 </head>
 <body>
 	<div class="container">
 	<?php include("menu.php"); ?>
 		<h2>SyS Meeting - Gerenciamento de Palestras</h2>

 