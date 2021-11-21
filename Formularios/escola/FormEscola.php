 <h1>Formulario da Escola</h1>

 
   
		<form action="index.php?pg=cadastroescola" method="post">
		
		
		
			<div class="form-group col-md-6">
				<label> <strong>Nome * </strong> </label>
				<input type="text" class="form-control" name="nome" placeholder="Informe seu nome" required />

			</div>

			<div class="form-group col-md-6">
				<label> <strong>Endereço * </strong> </label>
			<input type="text" class="form-control" name="endereco" placeholder="Informe Seu Endereço" required />
			</div>

			<div class="form-group col-md-6">
				<label> <strong>Bairro * </strong> </label>
			<input type="text" class="form-control" name="bairro" placeholder="Informe Seu Bairro" required />
			</div>

			<div class="form-group col-md-6">
				<label> <strong>Cidade * </strong> </label>
			<input type="text" class="form-control" name="cidade" placeholder="Informe sua Cidade" required />
			</div>

			<div class="form-group col-md-6">
			<select name="uf" class="form-control">

				<option>UF *</opion>

				<option value="ac">AC</opion>

				<option value="al">AL</opion>	

				<option value="ap">AP</opion>

				<option value="am">AM</opion>

				<option value="ba">BA</opion>	

				<option value="ce">CE</opion>

				<option value="df">DF</opion>

				<option value="es">ES</opion>

				<option value="go">GO</opion>

				<option value="ma">MA</opion>

				<option value="mt">MT</opion>

				<option value="ms">MS</opion>

				<option value="mg">MG</opion>

				<option value="pa">PA</opion>

				<option value="pb">PB</opion>

				<option value="pe">PE</opion>

				<option value="pi">PI</opion>

				<option value="rj">RJ</opion>

				<option value="rn">RN</opion>	

				<option value="rs">RS</opion>	

				<option value="ro">RO</opion>	

				<option value="rr">RR</opion>	

				<option value="sc">SC</opion>	

				<option value="sp">SP</opion>	

				<option value="se">SE</opion>	

				<option value="to">TO</opion>																
	
			</select>
			</div>
			<div class="form-group col-md-6">
				<label> <strong>E-mail * </strong> </label>
			<input type="email" class="form-control" name="email" placeholder="Informe Seu E-mail" required />
			</div>

			<div class="form-group col-md-6">
				<label> <strong>Telefone * </strong> </label>
			<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Informe seu Número" required />
			</div>

			<div class="form-group col-md-6">
				<label> <strong>Celular * </strong> </label>
			<input type="text" class="form-control" id="celular" name="celular" placeholder="Informe seu Número" required />
			</div>

			<div class="form-group col-md-6">
				<label> <strong>Site  </strong> </label>
			<input type="text" class="form-control" name="site" placeholder="Informe o o link"  />
			</div>

			<em>Os campos marcados com "*" são obrigatórios</em>

		

			

			<div class="form-group col-md-6">
				<input type="submit" value="Salvar" class="btn btn-primary">
			</div>
			
		</form>


<style type="text/css">
	
body{

  height: 100%;
  background-image: url("imagens/logo-ete1.jpg");
  height: 100%;
  background-position: auto;
  background-repeat: no-repeat;
  background-size: cover;

}
}


</style>