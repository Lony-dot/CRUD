<?php
    session_start();

    require_once('config.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

  

    $sql = "SELECT usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

    $configdb = new config();
    $link = $configdb-> conecta_mysql();

    $resultado_id =  mysqli_query($link, $sql);

    if($resultado_id) {
        $dados_usuario = mysqli_fetch_array($resultado_id);
 
    if(isset($dados_usuario['usuario'])){
        
        $_SESSION['usuario'] = $dados_usuario['usuario'];
        $_SESSION['email'] = $dados_usuario['email'];

        header('Location: home.php');

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

