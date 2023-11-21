<?php

session_start();

include('conexao.php');

$cpf = $_SESSION['cpf'];

$select = "SELECT nome, cpf, telefone FROM usuario WHERE cpf = '$cpf'";
$query = mysqli_query($conexao, $select);
$dados = mysqli_fetch_row($query);

?>

<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<!DOCTYPE html>
<html lang="pt- BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <form id="form-altera" action="#" method="POST"></form>
        <table>
        <tr>
				<td>Nome</td>
                <td>CPF</td>
                <td>Telefone</td>
			</tr>
            <tr>
                <td><?php echo $dados[0] ?></td>
                <td><?php echo $dados[1] ?></td>
                <td><input type="text" name="Telefone" value="<?php echo $dados[2] ?>"></td>
            </tr>
        </table>
        <br><br>    
       <a href="principal.php"><input type="button" value="Sair">
    </center>
</body>
</html>
