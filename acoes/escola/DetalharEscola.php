<?php	
//dados da conexão com o banco de dados
include("conexao/conexao.php");

$id = $_GET["id"];
//criando objeto query para armazenar resultado da consulta ao banco
$query= $con->query("SELECT id,nome,endereco,bairro,cidade,uf,email,telefone,celular,site FROM escola WHERE id=".$id);

//criando array de objetos convertidos da $query
$escola = $query->fetch(PDO::FETCH_OBJ);

 
?>


<h1>Dados da escola</h1>

<p> Nome: <strong> <?php echo $escola->nome?> </strong> </p>
<p> Endereço: <strong> <?php echo $escola->endereco?> </strong> </p>
<p> Bairro: <strong> <?php echo $escola->bairro?> </strong> </p>
<p> Cidade: <strong> <?php echo $escola->cidade?> </strong> </p>
<p> UF: <strong> <?php echo $escola->uf?> </strong> </p>
<p> E-mail: <strong> <?php echo $escola->email?> </strong> </p>
<p> Telefone: <strong> <?php echo $escola->telefone?> </strong> </p>
<p> Celular: <strong> <?php echo $escola->celular?> </strong> </p>
<p> Site: <strong> <?php echo $escola->site?> </strong> </p>


<a href="index.php?pg=formatualizarescola&id=<?php echo $escola->id ?>"><button class="btn btn-primary"> Atualizar escola</button></a>
<hr>