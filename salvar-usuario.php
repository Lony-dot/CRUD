
<!--Esse arquivo salva os campos que serão preenchidos da venda -->
<?php
   
   

require_once('config.php'); //TESTE SEGUINTE, IGNORE POR ENQUANTO



    switch ($_POST["acao"]) {
        
       

        case 'cadastrar':
            
        $nome = $_POST["nome"];
        $nome_mae = $_POST["nome_mae"];
            $cpf = $_POST["cpf"];
            $email = $_POST["email"];
            $contato = $_POST["contato"];
            $cep = $_POST["cep"];
          //  $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"]; 

            
            

            $sql = "INSERT INTO clientes (nome, nome_mae, cpf, email, contato, cep,  data_nasc) VALUES ( '{$nome}', '{$nome_mae}', '{$cpf}', '{$email}', '{$contato}', '{$cep}', '{$data_nasc}')";        

            $res = $con->query($sql);

            if($res == true){   
                print "<script>alert('Cadastro realizado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>"; //redireciona para listar.
            } else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>"; //caso dê errado, redireciona para a página listar.
            }

            break;
           
        
        case 'editar':
             $nome = $_POST["nome"];
             $nome_mae = $_POST["nome_mae"];
             $cpf = $_POST["cpf"];
            $email = $_POST["contato"];
            $contato = $_POST["email"];
            $cep = $_POST["cep"];
          //  $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE clientes SET 
            nome='{$nome}',
            nome_mae='{$nome_mae}',
            cpf='{$cpf}',
            email='{$email}',
            contato='{$contato}',
            cep='{$cep}',
           <!-- senha='{$senha}', -->
            data_nasc='{$data_nasc}'
            WHERE
            id=".$_REQUEST["id"];

            $res = $con->query($sql);

            

            if($res == true){   
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>"; //redireciona para listar.
            } else{
                print "<script>alert('Não foi possível Editar');</script>";
                print "<script>location.href='?page=listar';</script>"; //em casos de erro, redireciona para a página listar.
            }

            break;
        
        case 'excluir':
            $sql = "DELETE FROM clientes WHERE id=".$_REQUEST["id"];

            $res = $con->query($sql);

            if($res == true){   
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>"; //redirecionar
            } else{
                print "<script>alert('Não foi possível Excluir');</script>";
                print "<script>location.href='?page=listar';</script>"; //caso dê errado, redireciona para a página listar
            }
            break;


            var_dump($_POST["acao"]);
            exit; 
            
    }

 
    
    
    