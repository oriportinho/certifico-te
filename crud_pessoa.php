<?php
header('Location: cadastrar_certificado.php');

if(isset($_POST['AnexPart'])) {   
	$participantes = $_POST['participantes'];
	if(!empty($participantes)) {
		$arrayParticipantes = preg_split("/[\r\n,]+/", $participantes, -1, PREG_SPLIT_NO_EMPTY);
	}
	if(count($arrayParticipantes)%4 == 0) {
		for($i=0; $i<count($arrayParticipantes)/4; $i++) {
			$pessoa = array();
			$pessoa['nome'] = 		$arrayParticipantes[(i*4)]
			$pessoa['telefone'] = 	$arrayParticipantes[(i*4)+1]
			$pessoa['email'] = 		$arrayParticipantes[(i*4)+2]
			$pessoa['cpf'] = 		$arrayParticipantes[(i*4)+3]
			create($pessoa);
		}
	}
}

function create($pessoa) {
	$query = "INSERT INTO Pessoa(CpfPes, NomPes, TelPes, EmaPes)" .
			 "VALUES (" . $pessoa->cpf . ", " . $pessoa->nome . ", " . $pessoa->telefone . ", " . $pessoa->email . ");";
	
	if(!mysql_query($query)) die("erro");
	else 
}

function retrieve($nome) {
	$query = "SELECT * FROM Pessoa WHERE NomPes = '" . $nome . "';";
	if(!mysql_query($query)) die("erro");
}

function update($pessoa) {
	$query = "UPDATE Pessoa SET CpfPes=" . $pessoa->cpf . ",NomPes=" . $pessoa->nome . ",TelPes=" . $pessoa->telefone . ",EmaPes=" . $pessoa->email; 	
	if(!mysql_query($query)) die("erro");
	else 
}

function delete($nome) {
	$query = "DELETE FROM Pessoa WHERE NomPes = '" . $nome . "';";
	if(!mysql_query($query)) die("erro");
}
?>
