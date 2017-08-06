<?php
class Aluno {

	private $nome;
	private $rga;


	public function setNome($nome) {
		$this->nome = $nome;
	}

	public funtion setRga($rga) {
		$this->rga = $rga;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getRga() {
		return $this->rga;
	}
	
}