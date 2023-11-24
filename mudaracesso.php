<?php

session_start();

include('conexao.php');
include('validaradmin.php');

$select = "SELECT nome, descricao, nivel.id, login.cpf FROM usuario 
			INNER JOIN login ON usuario.cpf = login.cpf
			INNER JOIN nivel ON nivel.id = nivel";
$queryselect = mysqli_query($conexao, $select);

?>


<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background-color:#DEDAD2;
            font-family:"Lobster";
            top:50%;
            left:50%;
            width: 700px;
            padding:250px;
        }
    </style>
	<title></title>
</head>
<body>
	<center>
		<table border="1px">
			<tr>
				<td>Nome</td>
			</tr>
			<?php
			while ($linha = mysqli_fetch_row($queryselect)) {  ?>
			<tr>
				<td><a href="chamausuario.php?cod=<?php echo $linha[3] ?>"><?php echo $linha[0] ?></a></td>
			</tr>
		<?php } ?>
		</table>
		</form><br><br>
		<a href="principal.php">Voltar</a>
	</center>
</body>
</html>
