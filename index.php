<?php

 	include("pessoa.php");

 	$pessoa = new pessoa("Arthur",24,"Rua Pernambuco");

 	$json = json_encode($pessoa);
 	echo $pessoa;
 	echo "<br>";
 	echo $json;
?>