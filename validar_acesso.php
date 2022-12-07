<?php

    require_once('config.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

  

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

    $configdb = new config();
    $link = $configdb-> conecta_mysql();

    $resultado_id =  mysqli_query($link, $sql);


    $dados_usuario = mysqli_fetch_array($resultado_id);
 
     var_dump($dados_usuario); 
    //update
    //insert true/false
    //select
    //delete
?>

