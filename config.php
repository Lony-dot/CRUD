<?php


class config {

//host
private $host = 'localhost';

//usuario
private $user = 'root';

//senha
private $pass = '';

//banco
private $base = 'cadastro';

public function conecta_mysql(){

    //Criar a conexão
    $con = mysqli_connect($this->host, $this->user, $this->pass, $this->base);

    //Ajustar o charset de comunicação entre a aplicação e o banco de dados
    mysqli_set_charset($con, 'utf8');

    //Verificar se houve erro de conexão

    if(mysqli_connect_errno()){
      echo 'Erro ao tentar se conectar com o Banco de dados!: '.mysqli_connect_error();
    }

    return $con;
  }

}

?>

