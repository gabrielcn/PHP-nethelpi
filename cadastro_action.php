<?php
session_start();
require 'config.php';

// RECEBE VARIÁVEIS POR MEIO DE UM FORMULÁRIO HTML 
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$tipo = filter_input(INPUT_POST, 'tipo');
$senha = filter_input(INPUT_POST, 'senha');

// CONSULTA O BANCO SE HÁ CADASTRO
if($nome && $usuario && $tipo && $senha){
    $sql = $pdo->prepare("SELECT * FROM Cadastro WHERE usuario = :usuario");
    $sql->bindValue(':usuario', $usuario);
    $sql->execute();

    // NÃO HAVENDO CADASTRO, PERMITE O CADASTRO DO USUÁRIO
    if($sql->rowCount() === 0){

        // INSERE AS INFORMAÇÕES NO BANCO DE DADOS
        $sql = $pdo->prepare("INSERT INTO Cadastro (nome, usuario, tipo, senha) VALUES (:nome, :usuario, :tipo, md5(:senha))");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':usuario', $usuario);
        $sql->bindValue(':tipo', $tipo);
        $sql->bindValue(':senha', $senha);

        $sql->execute();

            $_SESSION['msg'] = "<p style='color:green;'> Cadastro realizado com sucesso!</p>";
            header("Location: cadastro.php");
    }else{
       $_SESSION['msg'] = "<p style='color:red;'> Cadastro não realizado, este usuário já existe na base de dados!</p>";
       header("Location: cadastro.php");
    }
}else{
    header("Location: cadastro.php");
    exit;
}
