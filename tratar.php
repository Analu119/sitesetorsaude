<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$responsavel = $_POST['responsavel'];
$observacoes = $_POST['observacoes'];
try {
    include_once("conexao.php");

    $consulta = $pdo->prepare("INSERT INTO paciente 
    (nome, sobrenome, nascimento, cpf, endereco, telefone, sexo, responsavel, observacoes)
    VALUES
    (:nome, :sobrenome, :nascimento, :cpf, :endereco, :telefone, :sexo, :responsavel, :observacoes)");
    
    $consulta->bindValue(":nome", $nome );
    $consulta->bindValue(":sobrenome", $sobrenome);
    $consulta->bindValue(":nascimento", $nascimento);
    $consulta->bindValue(":cpf", $cpf);
    $consulta->bindValue(":endereco", $endereco);
    $consulta->bindValue(":telefone", $telefone);
    $consulta->bindValue(":sexo", $sexo);
    $consulta->bindValue(":responsavel", $responsavel);
    $consulta->bindValue(":observacoes", $observacoes);
    $consulta->execute();

} catch(PDOException $e) {
    die("Erro de banco de dados: " . $e->getMessage());
}
 header("location:listar.php");
/* 
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$observacoes = $_POST['observacoes'];
try {
  include_once("conexao.php");
  $consulta = $pdo-> prepare ("INSERT INTO paciente(nome, sobrenome,observacoes) VALUES (:nome, :sobrenome, :observacoes)");
  $consulta->bindValue(":nome", $nome);
  $consulta->bindValue(":sobrenome",$sobrenome);
  $consulta->bindValue(":observacoes",$observacoes);

  $consulta->execute();

} catch(PDOException $e) {
    die("Erro de banco de dados: " . $e->getMessage());
}

*/
//$sql = "SELECT * FROM `paciente`";
//header("location: home.php");

?>

    