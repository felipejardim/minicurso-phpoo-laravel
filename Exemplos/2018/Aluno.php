<?php

	require("Pessoa.php");

	class Aluno extends Pessoa {
		
		public $nome;
		private $rga;
		public $cursoNome;
		public $cursoCod;
		public $cursoPeriodo;
		public static $modificador; //atributo estático, pode ser acessado independente de instância
		
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
		
		//método estático, pode ser acessado independete de instância
		public static function notificarDirecao() {
			return "Direção foi notificada!";
		}
		
		
	}


?>