<?php
class curso {
	
	private $descricao;
	private $horario;
	private $palestrante;
	
	function __construct() {
		$descricao = "";
		$horario = date_create_from_format("Y-m-d H:i:s", time());
		$palestrante = "";
	}
	
	function __construct($descricao, $horario, $palestrante) {
		$this->descricao = $descicao;
		$this->horario = $horario;
		$this->palestrante = $palestrante;
	}
	
	funcion __get($atributo) {
		strtolower($atributo);
		switch($atributo) {
			case "descricao": return $this->descricao; break;
			case "horario": return $this->horario; break;
			case "palestrante": return $this->palestrante; break;
			default: return "erro";
		}
	}
	
	function __set($atributo, $valor) {
		strtolower($atributo);
		switch($atributo) {
			case "descricao": $this->descricao = $valor; break;
			case "horario": $this->horario = $valor; break;
			case "palestrante": $this->palestrante = $valor; break;
		}
	}
}
?>
