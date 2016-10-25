<?php
$curso = array();
$curso['descricao'] = $_POST['nome_evento'];
$curso['horario'] = $_POST['data_evento'];
$curso['palestrante'] = $_POST['carga_horaria'];
create($curso);
header('Location: cadastrar_certificado.php');

function create($curso) {
	$query = "INSERT INTO Curso(DesCur, HorCur, NomPalCur)" .
			 "VALUES (" . $curso->descricao . ", " . $curso->horario . ", " . $curso->palestrante . ");";
	
	if(!mysql_query($query)) die("erro");
	else 
}

function retrieve($nome) {
	$query = "SELECT * FROM Curso WHERE DesCur = '" . $nome . "';";
	if(!mysql_query($query)) die("erro");
}

function update() {}

function delete($nome) {
	$query = "DELETE FROM Curso WHERE NomCur = '" . $curso . "';";
	if(!mysql_query($query)) die("erro");
}
?>
