<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
		<style type="text/css">
			#content {
				margin: 0 auto;
				overflow: hidden;
				width: 100%;
			}
			h1 {
				text-shadow: 2px 2px #000000;
				font-size: 550%;
				color: #c8f7c5;
				font-family: 'Pacifico',cursive;
			}
			body {
				background-color: #1ba39c;
			}
			input {
				border-radius: 20px;
    			border: 2px solid white;
    			padding: 5px;
    			width: 160px;
    			font-family: 'Fredoka One', cursive;
    			color: white;
    			text-shadow: 2px 2px #000000;
			}
			table {
				font-family: 'Fredoka One', cursive;
				color: white;
				text-shadow: 2px 2px #000000;
			}
			.buttons {
				font-size: 125%;
				background-color: transparent;
				border-color: white;
				width: auto;
				margin: 10px;
			}
			.buttonsdiv {
				margin-top: 40px;
			}
		</style>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" src="" />
	</head>
	<body>
		<div id="content">
			<center>
				<h1>Certifico - te</h1>
				<br>
				<form method="post">
					<table>
						<tr>
							<td>Nome do evento:</td>
							<td><input type="text" name="nome_evento" id="nome_evento" value="" /></td>
						</tr>
						<tr>
							<td>Data do evento:</td>
							<td><input type="text" name="data_evento" id="data_evento" value="" /></td>
						</tr>
						<tr>
							<td>Carga horária:</td>
							<td><input type="text" name="carga_horaria" id="carga_horaria" value="" /></td>
						</tr>
					</table>
					<div class="buttonsdiv">
						<input class="buttons" type="submit" value="Cadastrar Certificado" />
						<input class="buttons" type="button" value="Anexar Participantes" />
					</div>
				</form>
			</center>
		</div>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</html>