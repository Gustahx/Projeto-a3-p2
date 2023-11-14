<?php
session_start();

include('conexao.php');
include('funcoes.php');
include('validaradmingerente.php');

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$selectcpf =  "SELECT cpf FROM usuario WHERE cpf = '$cpf'";
$querycpf = mysqli_query($conexao, $selectcpf);
$dadocpf = mysqli_fetch_row($querycpf);
//------------------------------------------//
$selectlogin =  "SELECT login FROM login WHERE login = '$login'";
$querylogin = mysqli_query($conexao, $selectlogin);
$dadologin = mysqli_fetch_row($querylogin); 

if($nome <> NULL) {
    if (($dadocpf == NULL) && ($dadologin == NULL)) {
        $insertusuario = "INSERT INTO usuario (nome, cpf, telefone)
         VALUES 
        ('$nome', '$cpf', '$telefone')";

        $queryusuario = mysqli_query($conexao, $insertusuario);

        $senha_criptografada = criptografar($senha);

        $insertlogin = "INSERT INTO login (cpf, login, senha, nivel)
         VALUES
        ('$cpf', '$login', '$senha_criptografada', 3)";

        $querylogin = mysqli_query($conexao, $insertlogin);
       
        echo '<script>alert("Usuário cadastrado com sucesso!");
        window.location="addusuario.php";
        </script>';
    }  

}

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
         <h1>Adicionar Usuário</h1>
        <form   id="form-addusuario" action="#" method= "POST">
            Nome : <input type="text" name="nome" required><br>
            CPF  :  <input type="text" name="cpf" required><br>
            Telefone : <input type="text" name="telefone" required><br>
           Login : <input type="text" name="login" required><br>
           Senha : <input type="password" name="senha" required><br><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </center>
</body>
</html>