<?php

session_start();

include('conexao.php');
include('funcoes.php');
include('validarlogin.php');

$nivel = $_SESSION['nivel'];

?>
<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<!DOCTYPE html>
<html lang="pt- BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
		body {
            background: rgb(144,144,144);
background: linear-gradient(14deg, rgba(144,144,144,0.958420868347339) 1%, rgba(119,118,118,1) 5%, rgba(255,255,255,1) 29%, rgba(60,152,171,1) 72%, rgba(0,212,255,1) 100%);
		}
	</style>
    <title></title>
</head>
<body>
    <center>
        <?php
        if ($nivel < 3 ) { ?>
       <a href="addusuario.php">
        Adicionar Usuário</a> |
        <?php }
        if($nivel == 1) { ?>
         <a href="mudaracesso.php">Mudar Acesso</a>
         <?php } ?><br>
        <a href="logout.php">Sair</a>
    </center>
</body>
</html>