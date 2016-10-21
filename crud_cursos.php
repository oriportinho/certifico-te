<?php
function create($curso) {
	$query = "INSERT INTO Curso(DesCur, HorCur, NomPalCur)" .
			 "VALUES (" . $curso->descricao . ", " . $curso->horario . ", " . $curso->palestrante . ");";
	
	if(!mysql_query($query)) echo "erro";
}

function retrieve() {}

function update() {}

function delete() {}
?>
