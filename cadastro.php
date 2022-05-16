<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Cadastro </title>
	<meta charset="utf-8">

	<link rel="shortcut icon" href="N.png">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
	<body>
		<center>
		<div id="container-cadastro">
		<form method="POST" action="cadastro_action.php">

			<div class="secundario"> <img src="nethelp.png"></div>
			
			<h2 id="cadastre-se">Cadastra-se</h2>
                        <br>
                        <?php
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>
                        <br>
			Nome:<br>
			<input type="text" name="nome" placeholder="nome" required> <br> <br>

                        Usuário:<br>
                        <input type="text" name="usuario" placeholder="ex: user" required> <br> <br>

			Tipo de usuário:<br> <br>
			
			<div class="radio-admin"> 
			<input type="radio" name="tipo" value="A" required>
			  Admin  
			  <span> </span>
				</div>
	  
			  <div class="radio-comum">
			  <input type="radio" name="tipo" value="C" required>
			  Comum
			  <span> </span>
			  </div>
			  <br><br>

			Nova senha:<br>
			<input type="password" name="senha" placeholder="nova senha" required> <br> <br>

			Repita a senha:<br>
			<input type="password" name="senha" placeholder="repita a senha" required> <br> <br>


		        <input type="submit" value="Cadastrar" id="botao-cadastro">
			
			</form>

			<p id="paragrafo">Já tem um login? <a href="index.php">Entrar</a> </p>
		</div>
	</center>

	</body>
</html>
