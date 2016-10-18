<?php
	require_once "importanciaInterface.php";
	require_once "cobrancaInterface.php";

	class Clientes implements importanciaInterface, cobranca{
		private $nome;
		private $cpf;
		private $endereco;
		private $tipo;
		private $estrelas;
		private $endCob;
		
		public function __construct($nome, $cpf, $endereco, $tipo, $estrelas, $endCob){
			$this->nome     = $nome;
			$this->cpf      = $cpf;
			$this->endereco = $endereco;
			$this->tipo     = $tipo;
			$this->estrelas = $estrelas;
			$this->endCob    = $endCob;
		}
		
		public function getNome(){
				
			return $this->nome;
		}
		
		public function setNome($strNome){
			
			$this->nome = $strNome; 
		}
		
		public function getCpf(){
			
			return $this->cpf;
		}
		
		public function setCpf($strCpf){
			
			$this->cpf = $strCpf;
		}
		
		public function getEndereco(){
				
			return $this->endereco;
		}
		
		public function setEndereco($strEndereco){
			
			$this->endereco = $strEndereco;
		}
		
		public function getTipo(){
			return $this->tipo;
		}
		
		public function setTipo(){
			$this->tipo = $tipo;
		}
		
		public function getEstrelas(){
			return $this->estrelas;
		}
		
		public function setEstrelas($estrelas){
			$this->estrelas = $estrelas;
		}
		
		public function getCobranca(){
			return $this->endCob;
		}
		
		public function setCobranca($endCob){
			$this->endCob = $endCob;
		}
		
	
	}


?>