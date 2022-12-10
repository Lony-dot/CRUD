<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>PEGASUS</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/Pegasus.jpg" />
	        </div>

			
			<div class="collapse navbar-collapse justify-content-end">
  <ul class="nav navbar-nav navbar-right">
    <li class="nav nav-item right">
      <a class="nav-link" href="#">Sair</a>
    </li>
  </ul>
		

	         <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>





	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>		


<?php

    require_once('config.php'); //arquivo importado para dentro do script

    $usuario = $_POST['usuario'];
    echo '<br />';
    $email = $_POST['email'];
    echo '<br />';
    $senha = md5($_POST['senha']);

    $configdb = new config();
    $link = $configdb-> conecta_mysql();

    $sql = " insert into usuarios(usuario, email, senha) values ('$usuario', '$email', '$senha') ";

    //Executar a query
    if(mysqli_query( $link, $sql)){
        echo   '<h1>Usuário registrado com sucesso!</h1>';
    }else {
        echo 'Erro ao registrar o usuário!';
    }