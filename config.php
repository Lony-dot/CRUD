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
    mysqli_connect($this->host, $this->user, $this->pass, $this->base);
  }

}

?>

