<?php
$servername = "127.0.0.1";
$username = "root";
$password = "dedocalu";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$curso = array();
$curso['descricao'] = $_POST['nome_evento'];
$curso['horario'] = $_POST['data_evento'];
$curso['palestrante'] = $_POST['carga_horaria'];
create($curso, $conn);
header('Location: index.php');

function create($curso, $conn) {
        //$conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
        }

        $query = "INSERT INTO Curso(DesCur, HorCur, NomPalCur)" .
                         "VALUES (" . $curso['descricao'] . ", " . $curso['horario'] . ", " . $curso['palestrante'] . ");";

        if(!mysqli_query($query)) die("erro");
	
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
