<?php

$nome= $_POST["nome"];

$login= $_POST["login"];

$senha= md5($_POST["senha"]);

$privilegio= $_POST["privilegio"];

include("conexao/conexao.php");
$stmt = $con->prepare('insert INTO usuario(nome,login,senha,privilegio) VALUES (:nome, :login, :senha, :privilegio )');
$stmt->execute(array(':nome'=>$nome,':login'=>$login,':senha'=>$senha,':privilegio'=>$privilegio));
$id = $con->lastinsertid();
echo "<script>location.href='index.php?pg=detalharusuario&id=$id';</script>";