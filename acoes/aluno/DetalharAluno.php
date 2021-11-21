<?php	
//dados da conexão com o banco de dados
include("conexao/conexao.php");

$id = $_GET["id"];
//criando objeto query para armazenar resultado da consulta ao banco
$query= $con->query("SELECT id,nome,endereco,bairro,cidade,uf,email,celular,nascimento,escolaridade,curso,formacao,pdf FROM aluno WHERE id=".$id);

//criando array de objetos convertidos da $query
$aluno = $query->fetch(PDO::FETCH_OBJ);

$query2 = $con->query("SELECT id,nome,aluno_id FROM interesses WHERE aluno_id=".$id);

//criando array de objetos convertidos da $query
$interesses = $query2->fetchall(PDO::FETCH_ASSOC);	


 
?>


<h3>Dados da aluno</h3>

<p> Nome: <strong> <?php echo $aluno->nome?> </strong> </p>
<p> Endereço: <strong> <?php echo $aluno->endereco?> </strong> </p>
<p> Bairro: <strong> <?php echo $aluno->bairro?> </strong> </p>
<p> Cidade: <strong> <?php echo $aluno->cidade?> </strong> </p>
<p> UF: <strong> <?php echo strtoupper($aluno->uf)?> </strong> </p>
<p> E-mail: <strong> <?php echo $aluno->email?> </strong> </p>
<p> Celular: <strong> <?php echo $aluno->celular?> </strong> </p>
<p> Nascimento: <strong> <?php echo date("d/m/Y",strtotime($aluno->nascimento)) ?> </strong> </p>
<p> Escolaridade: <strong> <?php echo $aluno->escolaridade?> </strong> </p>
<p> Curso: <strong> <?php echo $aluno->curso?> </strong> </p>
<p> Formação: <strong> <?php echo $aluno->formacao?> </strong> </p>
<p> PDF do curriculo: <a href="arquivos/<?php echo $aluno->pdf?>" target="_blank" > Clique para download </a> </p>
<h4>Interesses do aluno</h4>

<ul>
<?php
foreach ($interesses as $int ) {
echo "<li>".$int['nome']."</li>";
}	
?>	
</ul>

<a href="index.php?pg=formatualizaraluno&id=<?php echo $aluno->id ?>"><button class="btn btn-primary"> Atualizar aluno</button></a>
<hr>