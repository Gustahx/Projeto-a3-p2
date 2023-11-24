<?php

session_start();

include('conexao.php');
include('validarlogin.php');

$nivel = $_SESSION['nivel'];

?>
<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" text="text/css" href="estilo.css">  
	<title></title>
</head>
<body>
	<center>
		<?php
		if ($nivel < 3) { ?>
		<a href="addusuario.php">Adicionar Usuário</a><br>
		<?php }
			if ($nivel == 1) { ?>
			<a href="mudaracesso.php">Mudar Acesso</a><br>
		<?php } ?> | 
		<a href="alterardados.php">Alterar Dados</a>
		<br>
		<a href="logout.php">Sair</a>
	</center>
</body>
</html>
