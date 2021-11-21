<?php	
//dados da conexão com o banco de dados
include("conexao/conexao.php");

$id=$_GET["id"];
//criando objeto query para armazenar resultado da consulta ao banco
$query = $con->query("SELECT id,nome FROM interesses WHERE id=".$id);

//criando array de objetos convertidos da $query
$interesses = $query->fetch(PDO::FETCH_OBJ);



?>

 <h1>Formulario de Interesses</h1>
   
		<form action="index.php?pg=atualizainteresses" method="post">

			<input type="hidden" name="id" value="<?php echo $interesses->id?>">
		
		
			<div class="form-group col-md-6">
				<label> <strong>Nome * </strong> </label>
				<input type="text" class="form-control" name="nome" value="<?=$interesses->nome?>"  placeholder="Informe seu nome" required />
			</div>

			<em>Os campos marcados com "*" são obrigatórios</em>


			<div class="form-group col-md-6">
				<input type="submit" value="Salvar" class="btn btn-primary">
			</div>
			
		</form>

