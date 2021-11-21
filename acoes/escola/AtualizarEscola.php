<?php

$id= $_POST["id"];

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


$stmt = $con->prepare('UPDATE escola set nome=:nome,endereco=:endereco,bairro=:bairro,cidade=:cidade,uf=:uf,email=:email,telefone=:telefone,celular=:celular,site=:site where id=:id');

$stmt->execute(array(':nome'=>$nome,
					 ':endereco'=>$endereco,
					 ':bairro'=>$bairro,
					 ':cidade'=>$cidade,
					 ':uf'=>$uf,
					 ':email'=>$email,
					 ':telefone'=>$telefone,
					 ':celular'=>$celular,																			 
					 ':site'=>$site,
					 ':id'=>$id));

echo "<script>location.href='index.php?pg=detalharescola&id=$id';</script>";