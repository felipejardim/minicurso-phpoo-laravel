<?php

	class Aluno {
		
		public $nome;
		private $rga;
		public $curso;
		
		public function solicitarMatricula() {
	return "Matrícula Solicitada aluno: "
			.$this->nome." : ".$this->rga;
		}
		
		public function setRga($rga) {
			$this->rga=$rga;
		}
		
		public function getRga() {
			return $this->rga;
		}
		
		
		
		
		
	}


?>