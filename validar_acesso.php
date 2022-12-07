<?php

    require_once('config.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

  

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

    $configdb = new config();
    $link = $configdb-> conecta_mysql();

    $resultado_id =  mysqli_query($link, $sql);

    if($resultado_id) {
        $dados_usuario = mysqli_fetch_array($resultado_id);
 
    if(isset($dados_usuario['usuario'])){
        echo 'Usuário existe';
        } else {
        header('Location: indexteste.php?erro=1');
        }
    } else {
        echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
    } 

   
    //update
    //insert true/false
    //select
    //delete
?>

