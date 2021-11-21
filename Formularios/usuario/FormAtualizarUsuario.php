<?php	
//dados da conexão com o banco de dados
include("conexao/conexao.php");

$id=$_GET["id"];
//criando objeto query para armazenar resultado da consulta ao banco
$query = $con->query("SELECT id,nome,login,senha,privilegio FROM usuario WHERE id=".$id);

//criando array de objetos convertidos da $query
$usuario = $query->fetch(PDO::FETCH_OBJ);

$privilegio = $usuario->privilegio== 1 ? 'Administrador': 'Editor'; 

?>

 <h1>Formulario do Usuario</h1>
   
		<form action="index.php?pg=atualizausuario" method="post">

			<input type="hidden" name="id" value="<?php echo $usuario->id?>">
		
		
			<div class="form-group col-md-6">
				<label> <strong>Nome * </strong> </label>
				<input type="text" class="form-control" name="nome" value="<?=$usuario->nome?>" placeholder="Informe seu nome" required />
			</div>

			<div class="form-group col-md-6">
				<label> <strong>Login * </strong> </label>
				<input type="text" class="form-control" name="login" value="<?=$usuario->login?>" placeholder="Informe seu login" required />
			</div>

			<div class="form-group col-md-6">
				<label> <strong>Senha * </strong> </label>
				<input type="password" class="form-control" name="senha" placeholder="Digite a nova senha apenas se for alterá la" required />
			</div>

			<div class="form-group col-md-6">
				<label> <strong>Privilegio * </strong> </label>
				<select name="privilegio" class="form-control">

					<option value="<?=$privilegio?>"><?=$privilegio?> </opion>

					<option value="1">Administrador</opion>

					<option value="2">Editor</opion>	

				</select>
			</div>

			<em>Os campos marcados com "*" são obrigatórios</em>


			<div class="form-group col-md-6">
				<input type="submit" value="Salvar" class="btn btn-primary">
			</div>
			
		</form>



<style type="text/css">
	
	body{

	  height: 100%;
	  background-color: #e6e6e6;
	  height: 100%;
	  background-position: center;
	  background-repeat: repeat;
	  background-size: 100% ;

}


</style>