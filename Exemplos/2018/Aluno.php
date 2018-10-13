<?php

	class Aluno {
		
		public $nome;
		private $rga;
		public $curso;
		
		public function 
		  __construct($nome=null,$rga=null) {
	echo "<br />Classe instanciada!";
	if($nome!=null) { $this->nome=$nome; }
	if($rga!=null) { $this->rga=$rga; }
		}
		
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