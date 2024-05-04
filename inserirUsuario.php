
<?php
session_start();
include("banco.php");

$b = new database();

$cns = $_POST['cns'];
$nome = $_POST['nome'];
$dtnasc = $_POST['dtnasc'];
$tel = $_POST['telefone'];
$tipo = $_POST['tipolog'];
$ender = $_POST['ende'];
$num = $_POST['num'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$data_ent = $_POST['dtentr'];




$_SESSION['cns'] = $cns;
//inserir endereco
$b->query("insert into endereco (tipo, endereco, bairro, cidade, numero) values('$tipo','$ender','$bairro','$cidade','$num')");

//consulta id endereco 
$consulta = $b->busca("select  max(id) from endereco");
$result = $consulta->fetch(PDO::FETCH_ASSOC);
$idend = current($result);

//inserir usuario
$b->query("insert into usuario (cns, nome, dtnasc, telefone,data_entrada, endereco_id) values('$cns','$nome','$dtnasc','$tel','$data_ent','$idend')");



echo "<script type='text/javascript'> alert('Usuário cadastrado com sucesso!');</script>";

echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = cadastroProcedimento.php'>";

?>
