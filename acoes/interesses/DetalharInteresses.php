<?php	
//dados da conexão com o banco de dados
include("conexao/conexao.php");

$id = $_GET["id"];
//criando objeto query para armazenar resultado da consulta ao banco
$query = $con->query("SELECT id,nome FROM interesses WHERE id=".$id);

//criando array de objetos convertidos da $query
$interesses = $query->fetch(PDO::FETCH_OBJ);

 
 
?>


<h1>Dados do Usuario</h1>

<p> Nome: <strong> <?php echo $interesses->nome?> </strong> </p>



<a href="index.php?pg=formatualizainteresses&id=<?php echo $interesses->id ?>"><button class="btn btn-primary"> Atualizar interesses</button></a>
<hr>