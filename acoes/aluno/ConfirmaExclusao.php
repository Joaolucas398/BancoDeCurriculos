<?php	
//dados da conexão com o banco de dados
include("conexao/conexao.php");

$id=$_GET["id"];
//criando objeto query para armazenar resultado da consulta ao banco
$query = $con->query("SELECT id,nome,endereco,bairro,cidade,uf,email,celular,nascimento,escolaridade,curso,formacao,pdf FROM aluno WHERE id=".$id);

//criando array de objetos convertidos da $query
$aluno = $query->fetch(PDO::FETCH_OBJ);
?>


<h1>Você realmente deseja excluir esse Aluno?</h1>

<p> Nome: <strong> <?php echo $aluno->nome?> </strong> </p>
<p> Endereço: <strong> <?php echo $aluno->endereco?> </strong> </p>
<p> Bairro: <strong> <?php echo $aluno->bairro?> </strong> </p>
<p> Cidade: <strong> <?php echo $aluno->cidade?> </strong> </p>
<p> UF: <strong> <?php echo $aluno->uf?> </strong> </p>
<p> E-mail: <strong> <?php echo $aluno->email?> </strong> </p>
<p> Celular: <strong> <?php echo $aluno->celular?> </strong> </p>
<p> Nascimento: <strong> <?php echo $aluno->nascimento?> </strong> </p>
<p> Escolaridade: <strong> <?php echo $aluno->escolaridade?> </strong> </p>
<p> Curso: <strong> <?php echo $aluno->curso?> </strong> </p>
<p> Formação: <strong> <?php echo $aluno->formacao?> </strong> </p>
<p> PDF: <strong> <?php echo $aluno->pdf?> </strong> </p>




<a href="index.php?pg=excluiraluno&id=<?php echo $aluno->id ?>"><button class="btn btn-primary"> Sim </button></a>
<a href="index.php?pg=listaraluno&id=<?php echo $aluno->id ?>"><button class="btn btn-primary"> Não </button></a>
