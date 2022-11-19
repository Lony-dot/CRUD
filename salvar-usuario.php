<?php
   
    switch ($_REQUEST["acao"]) {

        case 'cadastrar':

        $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $cnpj = $_POST["cnpj"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, cpf, cnpj, email, senha, data_nasc) VALUES ('{$nome}', '{$cpf}', '{$cnpj}', '{$email}', '{$senha}', '{$data_nasc}')";        

            $res = $conn->query($sql);

            if($res == true){   
                print "<script>alert('Cadastro realizado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>"; //redirecionar
            } else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>"; //caso dê errado, redireciona para a página listar
            }

            break;
        
        case 'editar':
             $nome = $_POST["nome"];
             $cpf = $_POST["cpf"];
             $cnpj = $_POST["cnpj"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET 
            nome='{$nome}',
            cpf='{$cpf}',
            cnpj='{$cnpj}',
            email='{$email}',
            senha='{$senha}',
            data_nasc='{$data_nasc}'
            WHERE
            id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true){   
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>"; //redirecionar
            } else{
                print "<script>alert('Não foi possível Editar');</script>";
                print "<script>location.href='?page=listar';</script>"; //caso dê errado, redireciona para a página listar
            }

            break;
        
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true){   
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>"; //redirecionar
            } else{
                print "<script>alert('Não foi possível Excluir');</script>";
                print "<script>location.href='?page=listar';</script>"; //caso dê errado, redireciona para a página listar
            }
            break;
            
    }

