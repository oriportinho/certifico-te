<!DOCTYPE html>
<html>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
		<style type="text/css">
			#container{
				/* Largura máxima */
				max-width:960px;
				/* Alinha ao centro */
				margin:0 auto;
				background:#fff;
				overflow:hidden;
			}
			#content {
				margin: 0 auto;
				overflow: hidden;
				width: 100%;
				/* Largura */
				
				/* Alinha à esquerda */
				float:left;
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
    			border: 2px solid grey;
    			padding: 5px; 
    			width: 160px;
    			font-family: 'Fredoka One', cursive;
    			color: grey;
			}
			table {
				font-family: 'Fredoka One', cursive;
				color: white;
			}
			.buttons {
				font-size: 125%;
				background-color: transparent;
				border-color: grey;
				width: auto;
				margin: 10px;
			}
			.buttonsdiv {
				margin-top: 40px;
			}
		</style>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" src="" />
	</head>
	
	<body>
		<div id="content">
			<center>
				<h1>Certifico-te</h1>
					<form method="post">
					<table>
						<tr>
							<td>Código:</td>
							<td><input type="text" name="codigo" id="codigo" /></td>
						</tr>
						<tr><td></td><td></td></tr>
					</table>
					<div class="buttonsdiv">

						<input id="fileInput" type="file" style="display:none;" accept="image/*"/>

						<input class = "buttons" type="submit" value="Verificar Certificado" onclick="popup()" />
						<script> function popup() {
							alert ("Certificado Válido!");
							}
						</script>
						<input class = "buttons" type="button" value="Carregar Imagem" onclick="document.getElementById('fileInput').click();" />
					</div>
				</form>
			</center>
		</div>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</html>