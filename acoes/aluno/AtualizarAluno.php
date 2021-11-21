<?php

function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
}

$id= $_POST["id"];

$nome= $_POST["nome"];

$endereco= $_POST["endereco"];

$bairro= $_POST["bairro"];

$cidade= $_POST["cidade"];

$uf= $_POST["uf"];

$email= $_POST["email"];

$celular= $_POST["celular"];

$nascimento= $_POST["nascimento"];

$escolaridade= $_POST["escolaridade"];

$curso= $_POST["curso"];

$formacao= $_POST["formacao"];

$pdf= $_POST["pdf"];

include("conexao/conexao.php");


$stmt = $con->prepare('UPDATE aluno set nome=:nome,endereco=:endereco,bairro=:bairro,cidade=:cidade,uf=:uf,email=:email,celular=:celular,nascimento=:nascimento,escolaridade=:escolaridade,curso=:curso,formacao=:formacao,pdf=:pdf  where id=:id');

$stmt->execute(array(':nome'=>$nome,
					 ':endereco'=>$endereco,
					 ':bairro'=>$bairro,
					 ':cidade'=>$cidade,
					 ':uf'=>$uf,
					 ':email'=>$email,
					 ':celular'=>$celular,
					 ':nascimento'=>$nascimento,
					 ':escolaridade'=>$escolaridade,
					 ':curso'=>$curso,
					 ':formacao'=>$formacao,
					 ':pdf'=>$pdf,																			
					 
					 ':id'=>$id));


echo "<script>location.href='index.php?pg=detalharaluno&id=$id';</script>";