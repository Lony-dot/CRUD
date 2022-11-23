<h1>Novo Usuário</h1>

<form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3"> 
        <label>Nome</label>
        <input type="text" placeholder="Nome Completo" name="nome" class="form-control">
    </div>
    <div class="mb-3"> 
        <label>CPF</label>
        <input type="text" placeholder="000.000.000-00"  minlength="14" maxlength="14" class="form-control" onkeypress="$(this).mask('000.000.000-00');">
    </div>
    <div class="mb-3">
        <label>E-mail</label>  
        <input type="email" placeholder="E-mail" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>  
        <input type="password" placeholder="Senha" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>  
        <input type="date" placeholder="Data de nascimento" name="data_nasc" class="form-control">
    </div>
    <div class="mb-3">
        
    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
</form>

