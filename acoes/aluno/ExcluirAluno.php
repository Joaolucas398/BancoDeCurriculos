<?php	
//dados da conexão com o banco de dados
include("conexao/conexao.php");

$id=$_GET["id"];
$stmt=$con->prepare("DELETE FROM aluno WHERE id=:id");
$stmt->bindparam(":id",$id);
$stmt->execute();
echo "<script>location.href='index.php?pg=listaraluno&id=$id';</script>";