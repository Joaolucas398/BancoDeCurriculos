<?php
 
$nome= $_POST["nome"];
 
$endereco= $_POST["endereco"];
 
$bairro= $_POST["bairro"];
 
$cidade= $_POST["cidade"];
 
$uf= $_POST["uf"];
 
$email= $_POST["email"];
 
$telefone= $_POST["telefone"];
 
$celular= $_POST["celular"];
 
$site= $_POST["site"];
 
include("conexao/conexao.php");
$stmt = $con->prepare('insert INTO escola (nome,endereco,bairro,cidade,uf,email,telefone,celular,site) VALUES (:nome, :endereco, :bairro, :cidade, :uf, :email, :telefone, :celular, :site )');
$stmt->execute(array(':nome'=>$nome,':endereco'=>$endereco,':bairro'=>$bairro,':cidade'=>$cidade,':uf'=>$uf,':email'=>$email,':telefone'=>$telefone,':celular'=>$celular,':site'=>$site));
$id = $con->lastinsertid();
echo "<script>location.href='index.php?pg=detalharescola&id=$id';</script>";