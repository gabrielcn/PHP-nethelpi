<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login </title>

	<meta charset="utf-8">

	<link rel="shortcut icon" href="N.png">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body> 
	<center> 
	<div id="container"> 
		<form action="login.php" method="POST"> 
		<div class="secundario"> <img src="nethelp.png"></div>
                <?php
                if(isset($_SESSION['nao_autenticado'])):
                ?>
                <img src="error.png">
                <p style='color:red;'>ERRO: USUARIO OU SENHA INVÁLIDOS!</p>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                <br>

			Login:<br>
			<input type="text" name="usuario" placeholder="user"> <br>

			Senha:<br>
			<input type="password" name="senha" placeholder="senha"> <br>

			<input id="botao" type="submit" value="Logar">
		</form>

		<p id="paragrafo">Não tem login? <a href="cadastro.php">Cadastre-se já</a> </p> 
	</center>
	</div>

</body>


</html>
