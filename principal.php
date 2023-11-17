<?php

session_start();

include('conexao.php');
include('validarlogin.php');

$nivel = $_SESSION['nivel'];

?>

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
			 <a href="addusuario.php"><input type="button" name="Adicionar Usuário" value="Adicionar Usuário"></a><br><br>
            <?php }
			if ($nivel == 1) { ?>
                <a href="mudaracesso.php"><input type="button" name="Mudar Acesso" value="Mudar Acesso"></a><br><br>
		<?php } ?>
        <a href="logout.php"><input type="button" name="Sair" value="Sair"></a>
	</center>
</body>
</html>
