<?php

	//require_once();
	require("Aluno.php");
	//include();
	
	$jorge       = new Aluno();
	$jorge->nome = "Jorge Silva";
echo "<br />".$jorge->solicitarMatricula();
	
$rodrigo = 
  new Aluno("Rodrigo Souza","123456");
//$rodrigo->nome = "Rodrigo Souza";
//$rodrigo->setRga("123456");
echo "<br />".$rodrigo->solicitarMatricula();
	
	
	
	
	echo "<br />".$rodrigo->getRga();
	
	

?>