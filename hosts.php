<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabela Hosts</title>

	<meta charset="utf-8">

	<link rel="shortcut icon" href="N.png">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Estilo CSS -->
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">

	 <!-- icons footer-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
  <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>

</head>
<body>

	<input type="checkbox" id="bt_menu"> <label for="bt_menu">&#9776;</label>

	<nav class="menu">

    <ul>
      <li> <img src="nethelp.png"> </li>
      <li><a href="pagina-inicial.php">Página Inicial</a></li>
      <li><a href="hostapd.php">Host AP</a></li>
      <li><a href="samba.php">Servidor Samba</a></li>
      <li><a href="#">Netplan <span class="material-icons">
                arrow_drop_down
                </span></a> 
        <ul>
          <li><a href="manual.php">MANUAL</a></li> 
          <li><a href="dhcp.php">DHCP4</a></li>
        </ul>
      </li>
      <!-- <li><a href="#">ICMP</a></li> -->
      <li><a href="hosts.php">Tabela Hosts</a></li>
      <li><a href="#"><?php echo $_SESSION['usuario'];?><span class="material-icons">
        arrow_drop_down
        </span> </a>

        <ul>
          <li><a href="logout.php">Logout<span class="material-icons">
        logout
        </span></a></li>
  </li>
        </ul>

    </ul>

  </nav>

  <div  id="phosts"> 
  <center> <p id="paragrafo-hosts"> Tabela Hosts </p> </center>
</div>

  <div class="imagem-hosts">
    <center> 
    <img src="hosts.png">
  </center>
  </div> 

	<section> 

		 <center><a href="#formulario1"><button id="button-hosts">Iniciar</button></a></center>

		<br><br><br><br>
		<div class="form-servico-hosts">
		<form id="formulario1">
			<center>

			Host:<br>
			<input type="text" name="" placeholder=""> <br> <br>

			IP:<br>
			<input type="number" name="" placeholder=""> <br> <br>

			<button id="button-hosts"> Enviar </button>

			</form>
			</center>
			</div>
		
		
	</section>

	<footer> 
  <div class="container">
    <div class="sec aboutus">
      <h2> Siga-nos </h2>
      <p> Siga-nos nas redes sociais e fique por dentro de todas as nossas ações, apoio Fatec Osasco.</p>
  <ul class="sci">
    <span class="facebook"> <li> <a href="https://www.facebook.com/FatecOsascoPrefeitoHirantSanazar/"> <i class="fa fa-facebook" aria-hidden="true"> </i> </a> </li> </span>
    <span class="instagram"> <li> <a href="https://www.instagram.com/fatec_osasco/?hl=pt-br"> <i class="fa fa-instagram" aria-hidden="true"> </i>  </a> </li> </span>
    <span class="twitter"> <li> <a href="https://twitter.com/FatecOsasco?s=20"> <i class="fa fa-twitter" aria-hidden="true"> </i>  </a> </li> </span>
    <span class="youtube"> <li> <a href="https://www.youtube.com/channel/UC9cP9DOIlpGGoIDFxbPZqcw"> <i class="fa fa-youtube-play" aria-hidden="true"> </i>  </a> </li> </span>
  </ul>
    </div>
    <div class="sec quickLinks">
      <h2> Quick Links </h2>
      <ul>
        <li> <a href="http://nethelpi.com.br/faq.html"> <i class="fa fa-search" aria-hidden="true"></i> FAQ </a> </li>
        <li> <a href="http://nethelpi.com.br/politica-de-privacidade.html"> <i class="fa fa-lock" aria-hidden="true"></i> Política de Privacidade </a> </li>
        <li> <a href="http://nethelpi.com.br/ajuda.html"> <i class="fa fa-question-circle" aria-hidden="true"></i> Ajuda </a> </li>
        <li> <a href="http://nethelpi.com.br/termos&condicoes.html"> <i class="fa fa-clipboard" aria-hidden="true"></i> Termos & Condições </a> </li>
        <li> <a href="http://nethelpi.com.br/quemsomos.html"> <i class="fa fa-users" aria-hidden="true"></i> Quem Somos </a></li>
        <li> <a href="#sec contact"> <i class="fa fa-at" aria-hidden="true"></i> Contato </a> </li>
      </ul>
    </div>
    <div class="sec contact">
      <h2> Contato </h2>
      <ul class="info"> 
        <li>
          <span> <i class="fa fa-map-marker" aria-hidden="true"> </i> </span>
          <span> Rua Pedro Rissato, 30 - Vila dos Remédios, Osasco - SP </span>
        </li>
        <li>
          <span> <i class="fa fa-phone" aria-hidden="true"> </i> </span>
          <p> <a href="tel:+55 (11) 96953-1226"> +55 (11) 96953-1226 </a> <br> </p>
        </li>
        <li>
          <span> <i class="fa fa-phone" aria-hidden="true"> </i> </span>
          <p> <a href="tel:+55 (11) 97581-1042"> +55 (11) 97581-1042 </a> <br> </p>
        </li>

        <li>
          <span> <i class="fa fa-envelope" aria-hidden="true"> </i> </span>
          <p> <a href="mailto:gabriel.reis7@fatec.sp.gov.br"> gabriel.reis7@fatec.sp.gov.br </a> </p>
        </li>
        <li>
          <span> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
          <p> <a href="mailto:matheus.pereira55@fatec.sp.gov"> matheus.pereira55@fatec.sp.gov.br </a> </p>
        </li>

      </ul>

    </div>

  </div>
  </footer>
  <div class="copyrightText">
    <p> Copyright © 2021 NetHelp. Todos os direitos reservados. </p>
  </div>

   <script type="text/javascript" src="javascript.js"> </script>

</body>
</html>
