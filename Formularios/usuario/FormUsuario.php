 <h1>Formulario do Usuario</h1>
   
		<form action="index.php?pg=cadastrousuario" method="post">
		
		
			<div class="form-group col-md-6">
				<label> <strong>Nome * </strong> </label>
				<input type="text" class="form-control" name="nome" placeholder="Informe seu nome" required />
			</div>

			<div class="form-group col-md-6">
				<label> <strong>Login * </strong> </label>
				<input type="text" class="form-control" name="login" placeholder="Informe seu login" required />
			</div>

			<div class="form-group col-md-6">
				<label> <strong>Senha * </strong> </label>
				<input type="password" class="form-control" name="senha" placeholder="Digite sua Senha" required />
			</div>

			<div class="form-group col-md-6">
				<label> <strong>Privilegio * </strong> </label>
				<select name="privilegio" class="form-control">

					<option value="previlegio">Privilegio</opion>

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