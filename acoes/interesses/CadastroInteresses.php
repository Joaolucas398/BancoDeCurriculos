<?php

$nome= $_POST["nome"];

include("conexao/conexao.php");
$stmt = $con->prepare('insert INTO interesses(nome) VALUES (:nome)');
$stmt->execute(array(':nome'=>$nome));
$id = $con->lastinsertid();
echo "<script>location.href='index.php?pg=detalharinteresses&id=$id';</script>";