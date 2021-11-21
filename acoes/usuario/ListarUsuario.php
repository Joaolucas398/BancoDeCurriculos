<?php
//dados da conexão com o banco de dados
include("conexao/conexao.php");

//criando objeto query para armazenar resultado da consulta ao banco
$query = $con->query("SELECT id,nome,login,senha,privilegio FROM usuario");

//criando array de objetos convertidos da $query
$usuario = $query->fetchall(PDO::FETCH_ASSOC);	


?>
<table class="table">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Login</th>
			<th>Privilegio </th>
		</tr>
	</thead>
	  <tbody>

		<?php

		foreach ($usuario as $usuario) {
		echo "<tr>
		<td>".$usuario['nome']."</td>
		<td>".$usuario['login']."</td>
		<td>".$usuario['privilegio']."</td>

		<td> <a href='index.php?pg=detalharusuario&id=".$usuario['id']."'> Detalhar </a> </td>
		<td> <a href='index.php?pg=confirmaexclusaousuario&id=".$usuario['id']."'> Excluir </a> </td>
		</tr>";
		}

		?>
		
	 </tbody>
</table>