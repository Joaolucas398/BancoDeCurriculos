<?php
//dados da conexão com o banco de dados
include("conexao/conexao.php");

//criando objeto query para armazenar resultado da consulta ao banco
$query = $con->query("SELECT id,nome,endereco,bairro,cidade,uf,email,telefone,celular,site FROM escola");

//criando array de objetos convertidos da $query
$escola = $query->fetchall(PDO::FETCH_ASSOC);	

?>
<table class="table">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Cidade </th>
			<th>Telefone </th>
			<th>Site </th>
		</tr>
	</thead>
	  <tbody>

		<?php

		foreach ($escola as $escola) {
		echo "<tr>
		<td>".$escola['nome']."</td>
		<td>".$escola['cidade']." - ".$escola['uf']."</td>
		<td>".$escola['telefone']."</td>
		<td>".$escola['site']."</td>
		
		

		<td> <a href='index.php?pg=detalharescola&id=".$escola['id']."'> Detalhar </a> </td>
		<td> <a href='index.php?pg=confirmaexclusaoescola&id=".$escola['id']."'> Excluir </a> </td>
		</tr>";
		}

		?>
		
	 </tbody>
</table>