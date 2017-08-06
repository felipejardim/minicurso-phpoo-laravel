<?php 
namespace Cadastro;

use Conexao\Conexao;

class Cadastro extends Conexao{

	public function inserir($tabela, $atributos, $values){
		$query = $this->getCon()->query("INSERT INTO $tabela ($atributos) VALUES ($values)");
		if($query)
			return 1;
		return 0;
	}

}