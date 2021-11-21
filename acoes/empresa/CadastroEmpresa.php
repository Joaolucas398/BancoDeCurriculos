<?php
 
$nome= $_POST["nome"];

$cnpj= $_POST["cnpj"];

$cpf= $_POST["cpf"];

$email= $_POST["email"];

$segmento= $_POST["segmento"];
 
$endereco= $_POST["endereco"];

$cidade= $_POST["cidade"];
 
$bairro= $_POST["bairro"];
 
$uf= $_POST["uf"];
 
$telefone= $_POST["telefone"];
 
$celular= $_POST["celular"];
 
$observacoes= $_POST["observacoes"];

$colaboradores= $_POST["colaboradores"];

 
include("conexao/conexao.php");
$stmt = $con->prepare('insert INTO empresa (nome,cnpj,cpf,email,segmento,endereco,cidade,bairro,uf,telefone,celular,observacoes,colaboradores) VALUES (:nome, :cnpj, :cpf, :email, :segmento, :endereco, :cidade, :bairro, :uf, :telefone, :celular, :observacoes, :colaboradores )');
$stmt->execute(array(':nome'=>$nome,':cnpj'=>$cnpj,':cpf'=>$cpf,':email'=>$email,':segmento'=>$segmento,':endereco'=>$endereco,':cidade'=>$cidade,':bairro'=>$bairro,':uf'=>$uf,':telefone'=>$telefone,':celular'=>$celular,':observacoes'=>$observacoes,':colaboradores'=>$colaboradores));
$id = $con->lastinsertid();
echo "<script>location.href='index.php?pg=detalharempresa&id=$id';</script>";

//interesses

$interesses = $_POST['interesses'];
foreach ($interesses as $int ) {
$stmt = $con->prepare('insert INTO interesses (nome,empresa_id) VALUES (:nome, :empresa_id )');
$stmt->execute(array(':nome'=>$int,':empresa_id'=>$id));

}
