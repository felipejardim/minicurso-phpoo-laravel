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
	
	//Aluno->nome="Jivago";
	//Aluno->solicitarMatricula();
	
	echo "<br />".Aluno::notificarDirecao();
	Aluno::$modificador="ASDFG";
	
	$jorge->endereco = "VILA A";
	echo "<br /> ".$jorge->endereco;
	
	echo "<br /> ".$jorge->abrirProcesso("Reitoria");
	

?>