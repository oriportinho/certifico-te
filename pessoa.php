<?php
class pessoa {
	
	private $nome;
	private $telefone;
	private $email;
	private $cpf;
	
	function __construct() {
		$nome = "";
		$telefone = "";
		$email = "";
		$cpf = "";
	}
	
	function __construct($nome, $telefone, $email, $cpf) {
		$this->nome = 		$nome;
		$this->telefone = 	$telefone;
		$this->email = 		$email;
		$this->cpf = 		$cpf;
	}
	
	funcion __get($atributo) {
		strtolower($atributo);
		switch($atributo) {
			case "nome": 		return $this->nome; 	break;
			case "telefone": 	return $this->telefone; break;
			case "email": 		return $this->email; 	break;
			case "cpf": 		return $this->cpf; 		break;
			default: 			return "erro";
		}
	}
	
	function __set($atributo, $valor) {
		strtolower($atributo);
		switch($atributo) {
			case "nome": 		$this->nome = 		$valor; break;
			case "telefone": 	$this->telefone = 	$valor; break;
			case "email": 		$this->email = 		$valor; break;
			case "cpf": 		$this->cpf = 		$valor; break;
		}
	}
}
?>
