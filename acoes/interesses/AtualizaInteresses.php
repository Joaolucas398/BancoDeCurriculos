<?php

$id= $_POST["id"];

$nome= $_POST["nome"];


include("conexao/conexao.php");


$stmt = $con->prepare('UPDATE interesses set nome=:nome where id=:id');

$stmt->execute(array(':nome'=>$nome,																			 
					 ':id'=>$id));

$id = $con->lastinsertid();
echo "<script>location.href='index.php?pg=detalharinteresses&id=$id';</script>";