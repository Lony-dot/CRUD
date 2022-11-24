<h1>Novo Usuário</h1>

<form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3"> 
        <label>Nome</label>
        <input type="text" placeholder="Nome Completo" name="nome" class="form-control" required>
    </div>
    <div class="mb-3"> 
        <label>CPF</label>
        <input type="text" placeholder="000.000.000-00"  minlength="14" maxlength="14" class="form-control" onkeypress="$(this).mask('000.000.000-00');"  required>
    </div>

    <div class="mb-3">
        <label>E-mail</label>  
        <input type="email" placeholder="nome@exemplo.com" name="email" class="form-control"  required>
    </div>

    <div class="mb-3">
        <label>Contato</label>  
        <input type="text" placeholder="(00)00000-0000" name="contato" class="form-control" type="text" class="form-control" onkeypress="$(this).mask('(00) 00000-0009')" required>
    </div>
   
    <div class="mb-3">
            <label>CEP</label>
            <input type="text" placeholder="00.000-000" class="form-control" name="cep" onkeypress="$(this).mask('00.000-000')" required>
     </div>
    
    <div class="mb-3">
        <label>Senha</label>  
        <input type="password" placeholder="Senha" name="senha" class="form-control"  required>
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>  
        <input type="date" placeholder="Data de nascimento" name="data_nasc" class="form-control"  required>
    </div>
    <div class="mb-3">
        
    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
</form>




