<?php	
//dados da conexão com o banco de dados
include("conexao/conexao.php");

$id = $_GET["id"];
//criando objeto query para armazenar resultado da consulta ao banco
$query = $con->query("SELECT id,nome,login,senha,privilegio FROM usuario WHERE id=".$id);

//criando array de objetos convertidos da $query
$usuario = $query->fetch(PDO::FETCH_OBJ);

$privilegio = $usuario->privilegio== 1 ? 'Administrador': 'Editor'; 
?>


<h1>Você realmente deseja excluir esse Usuario?</h1>

<p> Nome: <strong> <?php echo $usuario->nome?> </strong> </p>
<p> Login: <strong> <?php echo $usuario->login?> </strong> </p>
<p> Privilegio: <strong> <?php echo $privilegio?> </strong> </p>



<a href="index.php?pg=excluirusuario&id=<?php echo $usuario->id ?>"><button class="btn btn-primary"> Sim </button></a>
<a href="index.php?pg=listarusuario&id=<?php echo $usuario->id ?>"><button class="btn btn-primary"> Não </button></a>
