<?php 

require("Conexao/IConexao.php");
require("Conexao/Conexao.php");
require("Cadastro/Cadastro.php");

$con = new Conexao\Conexao();
$con->setHost("localhost");
$con->setUser("root");
$con->setSenha("123");
$con->setDb("curso");

$cadastro = new Cadastro\Cadastro();

if($cadastro->inserir("aluno", "nome, rga", "'Paulo', 'RGA'")){
	echo "cadastrado com sucesso";
}else {
	echo "erro ao cadastrar";
}