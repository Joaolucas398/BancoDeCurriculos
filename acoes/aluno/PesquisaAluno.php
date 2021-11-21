<?php
$nome = $_POST["nome"]; 

//dados da conexão com o banco de dados
include("conexao/conexao.php");

//criando objeto query para armazenar resultado da consulta ao banco
$query = $con->query("SELECT  id,nome,endereco,bairro,cidade,uf,email,celular,nascimento,escolaridade,curso,formacao,pdf FROM aluno where nome like '%$nome%'");

//criando array de objetos convertidos da $query

$aluno = $query->fetchall(PDO::FETCH_ASSOC);	

?>
<table class="table">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Cidade </th>
			<th>Celular </th>
			<th>Formação </th>
		</tr>
	</thead>
	  <tbody>

		<?php

		foreach ($aluno as $aluno) {
		echo "<tr>
		<td>".$aluno['nome']."</td>
		<td>".$aluno['cidade']." - ".$aluno['uf']."</td>
		<td>".$aluno['celular']."</td>
		<td>".$aluno['formacao']."</td>
		
		

		<td> <a href='index.php?pg=detalharaluno&id=".$aluno['id']."'> Detalhar </a> </td>
		<td> <a href='index.php?pg=confirmaexcluiraluno&id=".$aluno['id']."'> Excluir </a> </td>
		</tr>";
		}

		?>
		
	 </tbody>
</table>