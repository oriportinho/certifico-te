<?php
ini_set('display_errors', 'On');
header('Location: cadastrar_certificado.php');
$servername = "127.0.0.1";
$username = "certifico-te";
$password = "dedocalu";
$dbname = "certifico-te";

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
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$query = "INSERT INTO Pessoa(CpfPes, NomPes, TelPes, EmaPes)" .
			 "VALUES (" . $pessoa->cpf . ", " . $pessoa->nome . ", " . $pessoa->telefone . ", " . $pessoa->email . ");";

	if(!mysql_query($query)) die("erro");
	else
		$result = $conn->query($query);
	$conn->close();
}

function retrieve($nome) {
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	}

	$result = $conn->query($query);

	$query = "SELECT * FROM Pessoa WHERE NomPes = '" . $nome . "';";
	if(!mysql_query($query)) die("erro");
	$conn->close();
}

function update($pessoa) {
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	}

	$query = "UPDATE Pessoa SET CpfPes=" . $pessoa->cpf . ",NomPes=" . $pessoa->nome . ",TelPes=" . $pessoa->telefone . ",EmaPes=" . $pessoa->email;
	if(!mysql_query($query)) die("erro");
	else
		$result = $conn->query($query);
	$conn->close();
}

function delete($nome) {
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	}

	$result = $conn->query($query);

	$query = "DELETE FROM Pessoa WHERE NomPes = '" . $nome . "';";
	if(!mysql_query($query)) die("erro");
	$conn->close();
}
?>
