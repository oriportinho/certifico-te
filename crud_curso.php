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

$file_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]);
print_r($_FILES);

// query = "SELECT * FROM Pessoa";
// $stmt = $conn->prepare($query);
// $stmt->execute();
// $stmt->bind_result($cpf, $nome, $telefone, $email);

$sendgrid = new \SendGrid('fgXoUzchRnWsC5x94UThdA');

/*
while($stmt->fetch()) {

	$mailer = new SendGrid\EMail();
	$mailer -> addTo($email)
			-> setFrom('douglasmcarmona@gmail.com')
			-> setSubject('Certificado')
			-> setText('Seu certificado já está disponível')
			-> addAttachment('/var/www/html/certifico-te/2conferencia_CERTIFICADO_toni.jpg');

	$response = $sendgrid->client->mail()->send()->post($mailer);
	var_dump($response);
}
*/

// header('Location: index.php');

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
