<?php	
//dados da conexão com o banco de dados
include("conexao/conexao.php");

$email = $_POST["email"];
$senha = md5($_POST["senha"]);
//criando objeto query para armazenar resultado da consulta ao banco
$query= $con->query("SELECT aluno_id FROM usuario WHERE login= '$email' and senha = '$senha'");

$usuario = $query->fetch(PDO::FETCH_OBJ);
$id = $usuario -> aluno_id;

echo "<script>location.href='index.php?pg=detalharaluno&id=".$id."';</script>";
