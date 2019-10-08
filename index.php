<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Site para gerenciar atendimentos da Enfermaria.">
    <meta name="keywords" content="saúde, bem-estar">
    <title>Enfermaria</title>
    <link rel="icon" href="assets/img/icon.jpg">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<img src="assets/img/brasao.jpg" width="15%" padding="3%">
<header>

<h6>MINISTÉRIO DA EDUCAÇÃO</h6>
<h6>SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</h6>
<h6>INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO TOCANTINS</h6>
<h6>CAMPUS DIANÓPOLIS</h6>
<h6>GERÊNCIA DE ENSINO</h6>
<h6>COORDENAÇÃO DE ASSISTÊNCIA ESTUDANTIL</h6>
<h6>SETOR DE ASSISTÊNCIA À SAÚDE</h6>
</header>
<div class="menu">           
<a href="listar.php">Acervo de Dados</a> </div>
<div class="menu">           
<a href="inicio.php">Voltar ao Início</a> </div>
<body>

<div>
<b>Cadastrar paciente:</b>
</div>
    <form method="post" action="tratar.php">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
    </div>
    <div class="form-group">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" name="sobrenome">
    </div>  
    <div class="form-group">
        <label for="nascimento">Nascimento</label>
        <input type="date" class="form-control" id="nascimento" name="nascimento">
    </div>  
    <div class="form-group">
        <label for="cpf">Cpf</label>
        <input type="text" class="form-control" id="cpf" minlength="11" maxlength="11" placeholder="12345678900" name="cpf">
    </div>   
    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco">
    </div>    
    
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="tel" class="form-control" id="telefone" placeholder="Telefone" name="telefone">
    </div>
    <div class="form-group">
        <label for="sexo">Sexo</label>
        <input type="text" class="form-control" id="sexo" name="sexo">
    </div>    
    <div class="form-group">
        <label for="reponsavel">Responsável</label>
        <input type="text" class="form-control" id="responsavel" name="responsavel">
    </div>
    </div>
    <b>Inserir observações importantes sobre o paciente:</b>
</div>
<form method="post" action="tratar.php">   
    <div class="form-group">
        <label for="observacoes">Observações</label>
        <input type="text" class="form-control" id="observacoes" placeholder="Observações" name="observacoes">
    </div>    
    <button type="submit" class="btn btn-primary" background-color="red">Cadastrar</button>
 </form> 
</body>
<footer> 
    <img class="imgif"src="assets/img/if.png">
    <div> Rodovia TO 040 - KM 349 </div>
   <div> Loteamento Rio Palmeira. Lt 1 </div>
   <div> 77300-000 Dianópolis - TO </div>
   <div><a href="http://dianopolis.ifto.edu.br">www.dianopolis.ifto.edu.br</a></div> 
   <div>cae.dianopolis@ifto.edu.br</div> 
</footer>
</html>
    <script src="vendor/popper.min.js"></script>
    <script src="vendor/jquery-3.3.1.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>