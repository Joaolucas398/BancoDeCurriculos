 <h1>Formulario da Empresa</h1>
   
		<form action="index.php?pg=cadastroempresa" method="post">
		
		
			<div class="form-group col-md-6">
				<label> <strong>Nome * </strong> </label>
				<input type="text" class="form-control" name="nome" placeholder="Informe seu nome" required />

			</div>


			<div class="form-group col-md-6">
				<label> <strong>CNPJ </strong> </label>
				<input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Informe seu CNPJ" />

			</div>


			<div class="form-group col-md-6">
				<label> <strong>CPF * </strong> </label>
				<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe seu CPF" required />

			</div>


			<div class="form-group col-md-6">
				<label> <strong>E-mail * </strong> </label>
			<input type="email" class="form-control" name="email" placeholder="Informe Seu E-mail" required />

			</div>


			<div class="form-group col-md-6">
				<label> <strong>Segmento * </strong> </label>
			<input type="text" class="form-control" name="segmento" placeholder="Qual seu Segmento" required />

			</div>


			<div class="form-group col-md-6">
				<label> <strong>Endereço * </strong> </label>
			<input type="text" class="form-control" name="endereco" placeholder="Informe Seu Endereço" required />

			</div>


			<div class="form-group col-md-6">
				<label> <strong>Cidade * </strong> </label>
			<input type="text" class="form-control" name="cidade" placeholder="Informe sua Cidade" required />

			</div>


			<div class="form-group col-md-6">
				<label> <strong>Bairro * </strong> </label>
			<input type="text" class="form-control" name="bairro" placeholder="Informe Seu Bairro" required />

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
				<label> <strong>Telefone * </strong> </label>
			<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Informe seu telefone" required />

			</div>

			<div class="form-group col-md-6">
				<label> <strong>Celular * </strong> </label>
			<input type="text" class="form-control" id="celular" name="celular" placeholder="Informe seu Número" required />

			</div>


			<div class="form-group col-md-6">
				<label> <strong>Observações * </strong> </label>
			<input type="text" class="form-control" name="observacoes" placeholder=" "  />

			</div>


			<select name="colaboradores" class="form-control col-md-6">

			<option>Quantidade de colaboradores </opion>

			<option value="1-10">1-10</opion>

			<option value="11-20">11-20</opion>

			<option value="21-50">21-50</opion>		
	
			</select>

			<em> Para quais áreas você esta procurando profissionais * </em>
			

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Vendedor" class="custom-control-input" id="vendedor">
			    <label class="custom-control-label" for="vendedor">Vendedor</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Telefonista" class="custom-control-input" id="telefonista">
			    <label class="custom-control-label" for="telefonista">Telefonista</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Gestão financeira" class="custom-control-input" id="gestaofinanceira">
			    <label class="custom-control-label" for="gestaofinanceira">Gestão financeira</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Gestão de recursus humanos" class="custom-control-input" id="gestaohumana">
			    <label class="custom-control-label" for="gestaohumana">Gestão de recursus humanos</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Gestão de marketing" class="custom-control-input" id="marketing">
			    <label class="custom-control-label" for="marketing">Gestão de marketing</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Logística" class="custom-control-input" id="logistica">
			    <label class="custom-control-label" for="logistica">Logística</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Planejamento estratégico" class="custom-control-input" id="planejamento">
			    <label class="custom-control-label" for="planejamento">Planejamento estratégico</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Auditoria" class="custom-control-input" id="auditoria">
			    <label class="custom-control-label" for="auditoria">Auditoria</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Consultoria" class="custom-control-input" id="consultoria">
			    <label class="custom-control-label" for="consultoria">Consultoria</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Controle de produção" class="custom-control-input" id="produção">
			    <label class="custom-control-label" for="produção">Controle de produção</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Gestão ambiental" class="custom-control-input" id="ambiental">
			    <label class="custom-control-label" for="ambiental">Gestão ambiental</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Pesquisa de mercado" class="custom-control-input" id="mercado">
			    <label class="custom-control-label" for="mercado">Pesquisa de mercado</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Carreira acadêmina" class="custom-control-input" id="carreira">
			    <label class="custom-control-label" for="carreira">Carreira acadêmina</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Gestão de processos" class="custom-control-input" id="processos">
			    <label class="custom-control-label" for="processos">Gestão de processos</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Operador de caixa" class="custom-control-input" id="operador">
			    <label class="custom-control-label" for="operador">Operador de caixa</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Recepcionista" class="custom-control-input" id="recepcionista">
			    <label class="custom-control-label" for="recepcionista">Recepcionista</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Operador de Telemarketing" class="custom-control-input" id="telemarketing">
			    <label class="custom-control-label" for="telemarketing">Operador de Telemarketing</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Auxiliar Administrativo" class="custom-control-input" id="administrativo">
			    <label class="custom-control-label" for="administrativo">Auxiliar Administrativo</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Estoquista" class="custom-control-input" id="estoquista">
			    <label class="custom-control-label" for="estoquista">Estoquista</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Vendedor de Balcão" class="custom-control-input" id="balcao">
			    <label class="custom-control-label" for="balcao">Vendedor de Balcão</label>
			</div>

			<div class="custom-control custom-checkbox">
			    <input type="checkbox" name="interesses[]" value="Outros" class="custom-control-input" id="outros">
			    <label class="custom-control-label" for="outros">Outros</label>
			</div>


			<em>Os campos marcados com "*" são obrigatórios</em>  


		

			

			<div class="form-group ol-md-6">


				<input type="submit" value="Salvar" class="btn btn-primary">
			</div>
			
		</form>


<style type="text/css">
	
	body{

	  height: 100%;
	  background-color: white;
	  height: 100%;
	  background-position: center;
	  background-repeat: repeat;
	  background-size: 100% ;

}


</style>