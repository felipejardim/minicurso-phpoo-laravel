<?php
namespace Conexao;

use Conexao\IConexao;

use mysqli;

class Conexao implements IConexao {

	private $con;
	private $host;
	private $user;
	private $senha;
	private $db;

	public function __construct() {

		$this->con = new mysqli("localhost", "root", "123", "curso");

		//mysqli_select_db($this->con, "");
	}

	public function getCon() {
		return $this->con;
	}

	public function getHost() {
		return $this->host;
	}

	public function getUser() {
		return $this->user;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function getDb() {
		return $this->db;
	}

	public function setHost($host) {
		$this->host = $host;
	}

	public function setUser($user) {
		$this->user = $user;
	}

	public function setSenha($senha) {
		$this->senha = $senha;
	}

	public function setDb($db) {
		$this->db = $db;
	}
}