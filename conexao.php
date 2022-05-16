<?php
//Define parametros para conexão
define('HOST', '127.0.0.1');
define('USUARIO', 'nethelp');
define('SENHA', 'nethelp');
define('DB', 'nethelp');

//Criar a conexão
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

