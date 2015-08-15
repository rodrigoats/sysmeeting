<?php

	include("funcoes.php");

	$numeroA = $_GET['numeroA'];
	$numeroB = $_GET['numeroB'];

	$soma =  soma($numeroB , $numeroA);

	echo "A soma de $numeroA + $numeroB = $soma";
?>