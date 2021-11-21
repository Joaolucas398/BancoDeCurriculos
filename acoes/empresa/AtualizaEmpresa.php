<?php

$id= $_POST["id"];

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


$stmt = $con->prepare('UPDATE empresa set nome=:nome,cnpj=:cnpj,cpf=:cpf,email=:email,segmento=:segmento,endereco=:endereco,cidade=:cidade,bairro=:bairro,uf=:uf,telefone=:telefone,celular=:celular,observacoes=:observacoes,colaboradores=:colaboradores where id=:id');

$stmt->execute(array(':nome'=>$nome,
		 			 ':cnpj'=>$cnpj,
		 			 ':cpf'=>$cpf,
	 				 ':email'=>$email,
	 				 ':segmento'=>$segmento,
					 ':endereco'=>$endereco,
					 ':cidade'=>$cidade,
					 ':bairro'=>$bairro,
					 ':uf'=>$uf,
					 ':telefone'=>$telefone,
					 ':celular'=>$celular,																	 
					 ':observacoes'=>$observacoes,
					 ':colaboradores'=>$colaboradores,
					 ':id'=>$id));


echo "<script>location.href='index.php?pg=detalharempresa&id=$id';</script>";