<!DOCTYPE html>
<html>
<head>
    <title>Valida já!</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="fundo01"></div>
	<div class="logo01"><img src="outros/logo.jpg" alt="some text" width=100 height=100></div>
			

	<h1 style="font-family: Garamond">Enviar horas</h1>
<form method="POST" action="processa.php" enctype="multipart/form-data">
	<label>Nome: </label>
	<input type="text" name="nome"><br><br>
	<!--<label>Arquivo: </label>-->
	<input type="file" name="arquivo[]" multiple="multiple" /><br><br>
	<input type="submit" value="Cadastrar">
</form>

</body>
</html>




