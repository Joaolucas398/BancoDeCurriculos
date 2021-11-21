<?php
$nome = $_POST["nome"]; 

//dados da conexão com o banco de dados

include("conexao/conexao.php");

//criando objeto query para armazenar resultado da consulta ao banco
$query = $con->query("SELECT  id,nome,cnpj,cpf,email,segmento,endereco,cidade,bairro,uf,telefone,celular,observacoes,colaboradores FROM empresa where nome like '%$nome%'");


//criando array de objetos convertidos da $query
$empresa = $query->fetchall(PDO::FETCH_ASSOC);	

?>
<table class="table">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Cidade </th>
			<th>Telefone </th>
		</tr>
	</thead>
	  <tbody>

		<?php

		foreach ($empresa as $empresa) {
		echo "<tr>
		<td>".$empresa['nome']."</td>
		<td>".$empresa['cidade']." - ".$empresa['uf']."</td>
		<td>".$empresa['telefone']."</td>

		<td> <a href='index.php?pg=detalharempresa&id=".$empresa['id']."'> Detalhar </a> </td>
		<td> <a href='index.php?pg=confirmaexclusaoempresa&id=".$empresa['id']."'> Excluir </a> </td>
		</tr>";
		}

		?>
		
	 </tbody>
</table>