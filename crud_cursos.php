<?php
function create($curso) {
	$query = "INSERT INTO Curso(DesCur, HorCur, NomPalCur)" .
			 "VALUES (" . $curso->descricao . ", " . $curso->horario . ", " . $curso->palestrante . ");";
	
	if(!mysql_query($query)) echo "erro";
}

function retrieve($nome) {
	$query = "SELECT * FROM Curso WHERE DesCur = '" . $nome . "';";
	if(!mysql_query($query)) echo "erro";
}

function update() {}

function delete($nome) {
	$query = "DELETE FROM Curso WHERE NomCur = '" . $curso . "';";
	if(!mysql_query($query)) echo "erro";
}
?>
