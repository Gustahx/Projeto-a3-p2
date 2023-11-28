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
		<a href="addusuario.php"><input type="button" value="Adicionar Usuário"></a><br><br>
		<?php }
			if ($nivel == 1) { ?>
			<a href="mudaracesso.php"><input type="button" value="Mudar Acesso"></a><br><br>
		<?php } ?> 
		<a href="alterardados.php"><input type="button" value="Alterar Dados"></a><br>
		<br>
		<a href="pesquisarcnpj.php"><input type="button" value="Pesquisar CNPJ"></a><br><br>
		<a href="logout.php"><input type="button" value="Sair"></a>
	</center>
</body>
</html>
