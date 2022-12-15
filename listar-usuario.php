<h1>Listar Usuários</h1>
<?php



    $sql = "SELECT * FROM clientes";

    $res =  $con->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0) {
        print "<table class='table table-hover
        table-striped table-bordered'"; //tabela de apresentação 

        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Nome Mãe</th>";
        print "<th>CPF</th>";
        print "<th>E-mail</th>";
        print "<th>Contato</th>";
        print "<th>Cep</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";

        while($row = $res->fetch_object()){

            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->nome_mae."</td>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->contato."</td>";
            print "<td>".$row->cep."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>
            
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button> <!-- as barras do onclick foram utilizadas para possibilitar o uso das aspas duplas. -->

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"class='btn btn-danger'>Excluir</button>
                    </td>";

            print "</tr>";

        }
            print "</table>";
    }else{
        print "<p class='alert alert-danger'> Não encontrou resultados!</p>";
        
    }
    
            
?>
 