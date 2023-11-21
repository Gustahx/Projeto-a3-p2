<?php

session_start();

include('conexao.php');

$cpf = $_SESSION['cpf'];

$select = "SELECT nome, cpf, telefone FROM usuario WHERE cpf = '$cpf'";
$query = mysqli_query($conexao, $select);
$dados = mysqli_fetch_row($query);

?>
<!DOCTYPE html>
<html lang="pt- BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" text="text/css" href="estilo.css">
    <title></title>
</head>
<body>
    <center>
        <table>
        <tr>
				<td>Nome</td>
                <td>CPF</td>
                <td>Telefone</td>
			</tr>
            <tr>
                <td><?php echo $dados[0] ?></td>
                <td><?php echo $dados[1] ?></td>
                <td><?php echo $dados[2] ?></td>
            </tr>
        </table>
    </center>
</body>
</html>