<?php

    require_once('config.php'); //arquivo importado para dentro do script

    $usuario = $_POST['usuario'];
    echo '<br />';
    $email = $_POST['email'];
    echo '<br />';
    $senha = $_POST['senha'];

    $configdb = new config();
    $link = $configdb-> conecta_mysql();

    $sql = " insert into usuarios(usuario, email, senha) values ('$usuario', '$email', '$senha') ";

    //Executar a query
    if(mysqli_query( $link, $sql)){
        echo 'Usuário registrado com sucesso!';
    }else {
        echo 'Erro ao registrar o usuário!';
    }
    
?>