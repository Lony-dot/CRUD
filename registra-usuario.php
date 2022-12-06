<?php

    require_once('config.php'); //arquivo importado para dentro do script

    $usuario = $_POST['usuario'];
    echo '<br />';
    $senha = md5($_POST['senha']);

    $configdb = new config();
    $link = $configdb-> conecta_mysql();

    $sql = " insert into usuarios(usuario, senha) values ('$usuario', '$senha') ";

    //Executar a query
    if(mysqli_query( $link, $sql)){
        echo 'Usuário registrado com sucesso!';
    }else {
        echo 'Erro ao registrar o usuário!';
    }
?>