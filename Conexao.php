<?php
class Conexao{
	
	private $host = "localhost";
	private $usuario = "root";
	private $senha = "123456";
	private $bd = "auladebancophp";
	public $PDO;

	function select($tabela){

		$this->PDO = new PDO ("mysql:host=". $this->host . ";dbname=".$this->bd, $this->usuario, $this->senha);
		return $this->PDO->query("select * from ".$tabela);  
	}
}

?>