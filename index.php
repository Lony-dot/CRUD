 <!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   
     
    <title>Cadastro</title>
  </head>

  
  <body>

  <nav class="navbar navbar-expand-lg 
  navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=novo">Cadastrar venda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar usuários</a> 
                </li>   
                <li class="nav-item">
                <a class="nav-link"  href="indexteste.php">Sair</a>  
                
            </ul>


           
        </div>
    </nav>
        
        <div class="container"> <!-- Ideal deixar dentro de um container para melhorar a visualização-->
            <div class="row">
                <div class="col mt-5">
                <?php
                    include("config.php"); //arquivo de conexão com o banco de dados, imprescindível ter ele aqui.
                    switch(@$_REQUEST["page"]){ //requisição da página 
                        case "novo":
                        include("novo-usuario.php");
                        break;
                        case "listar":
                            include("listar-usuario.php")
                            ;     
                        break;
                        case "salvar":
                            include("salvar-usuario.php")
                            ;
                        break;
                            case "editar":
                                include("editar-usuario.php")
                            ;
                        break;
                        default:
                            print "<h1>Bem vindos!</h1>";
                    }
                ?>
             
                </div>
            </div>
        </div>
 
</body>
</html>

