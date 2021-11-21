<?php

$id= $_POST["id"];

$nome= $_POST["nome"];

$login= $_POST["login"];

$senha= $_POST["senha"];

$privilegio= $_POST["privilegio"];


include("conexao/conexao.php");


$stmt = $con->prepare('UPDATE usuario set nome=:nome,login=:login,senha=:senha,privilegio=:privilegio where id=:id');

$stmt->execute(array(':nome'=>$nome,
					 ':login'=>$login,
					 ':senha'=>$senha,
					 ':privilegio'=>$privilegio,																			 
					 ':id'=>$id));


echo "<script>location.href='index.php?pg=detalharusuario&id=$id';</script>";