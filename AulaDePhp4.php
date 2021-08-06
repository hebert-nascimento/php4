<?php 
   require_once 'Conexao.php';
   class Aluno extends Conexao{
	   private $nome;
	   public $sobrenome;
	   public $materia;
	   public $sexo;
	   
	   function Aluno(){
		   $this ->preparaAluno("");
	   }
	   function preparaAluno($nome,$sobrenome = ""){
		   
		
		}   
		
		function pegarDadosDoBanco(){
			$dados = $this->select('formtest');
			foreach($dados as $dado){
					print_r($dado);
			}
		}
		
		function setnome($nome){
		
		#$this->nome = "Klaus";
	}
    function getnome(){
		
		return $this->nome;
	}
	
	#----------------------------#
	
	function setSobrenome($sobrenome){
		
		#$this->sobrenome = "Klaus";
	}
    function getsobrenome(){
		
		return $this->sobrenome;
	}
   }


?>