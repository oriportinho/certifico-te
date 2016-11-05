<?php
$curso = array();
$curso['descricao'] = $_POST['nome_evento'];
$curso['horario'] = $_POST['data_evento'];
$curso['palestrante'] = $_POST['carga_horaria'];
create($curso);
$result = retrieve($_POST['nome_evento']);
if(isset($result)) print_r($result);
else die("Erro");
header('Location: cadastrar_certificado.php');

function create($curso) {
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	}

	$query = "INSERT INTO Curso(DesCur, HorCur, NomPalCur)" .
			 "VALUES (" . $curso->descricao . ", " . $curso->horario . ", " . $curso->palestrante . ");";

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

	$query = "SELECT * FROM Curso WHERE DesCur = '" . $nome . "';";
	if(!mysql_query($query)) die("erro");

	$result = $conn->query($query);

	$conn->close();
}

function update() {}

function delete($nome) {
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	}

	$query = "DELETE FROM Curso WHERE NomCur = '" . $curso . "';";
	if(!mysql_query($query)) die("erro");

	$result = $conn->query($query);
	$conn->close();
}
?>
