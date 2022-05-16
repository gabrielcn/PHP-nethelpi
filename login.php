<?php
session_start();
// Inclui as instancias de conexao com o banco e a base de dados
include('conexao.php');
// Verifica se o usuário digitou alguma coisa nos campos, caso não tenha digitado nada, retorna ao index.html
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

// Coleta os dados que o usuário digitou
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

// Verifica se o usuario possui cadastro na tabela Cadastro
$query = "select idusuario, usuario from Cadastro where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

//Quantidade de linhas que a query retornou
$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: pagina-inicial.php');
    exit();
}else{
   $_SESSION['nao_autenticado'] = true;
   header('Location: index.php');
   exit();
}
