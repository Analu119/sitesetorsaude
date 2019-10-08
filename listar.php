<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Enfermaria</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
        <a href="inicio.php">Voltar ao Início</a>
</div> 
<div class="menu">
<a href="index.php">Cadastrar pacientes</a> </div>
<body>
<table class="table table-bordered table-striped">
        <thead>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Nascimento</th>
            <th> CPF </th>      
            <th>Endereço</th> 
            <th>Telefone</th> 
            <th>Sexo</th> 
            <th>Responsável</th> 
            <th>Observações</th> 
            </thead>
       
    <?php
    try {
        include_once("conexao.php");

        $consulta = $pdo->prepare("SELECT * FROM paciente");
    
        $consulta->execute();

    } catch(PDOException $e) {
        die("Erro de banco de dados: " . $e->getMessage());
   } 
      $dados = $consulta ->fetchAll();
   
       for($x=0;$x < count($dados); $x++){
       echo "<tr>".
        "<td>" . $dados[$x]['nome']."</td>".
        "<td>" . $dados[$x]['sobrenome'] ."</td>".
        "<td>" . $dados[$x]['nascimento'] ."</td>".
        "<td>" . $dados[$x]['cpf'] ."</td>".
        "<td>" . $dados[$x]['endereco']."</td>".
        "<td>". $dados[$x]['telefone']."</td>".
        "<td>". $dados[$x]['sexo'] ."</td>".
        "<td>". $dados[$x]['responsavel'] ."</td>".
        "<td>". $dados[$x]['observacoes'] ."</td>".
      "</tr>"; 


    } 
      ?> 
       </table>   
  <script src="vendor/popper.min.js"></script>
 <script src="vendor/jquery-3.3.1.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script> 
</body>
</html>

