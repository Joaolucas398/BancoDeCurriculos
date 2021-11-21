<?php	
//dados da conexão com o banco de dados
include("conexao/conexao.php");

$id=$_GET["id"];
//criando objeto query para armazenar resultado da consulta ao banco
$query = $con->query("SELECT id,nome,cnpj,cpf,email,segmento,endereco,cidade,bairro,uf,telefone,celular,observacoes,colaboradores FROM empresa WHERE id=".$id);

//criando array de objetos convertidos da $query
$empresa = $query->fetch(PDO::FETCH_OBJ);
?>


<h1>Você realmente deseja excluir essa Empresa?</h1>

<p> Nome: <strong> <?php echo $empresa->nome?> </strong> </p>
<p> CNPJ: <strong> <?php echo $empresa->cnpj?> </strong> </p>
<p> CPF: <strong> <?php echo $empresa->cpf?> </strong> </p>
<p> Segmento: <strong> <?php echo $empresa->segmento?> </strong> </p>
<p> E-mail: <strong> <?php echo $empresa->email?> </strong> </p>
<p> Endereço: <strong> <?php echo $empresa->endereco?> </strong> </p>
<p> Cidade: <strong> <?php echo $empresa->cidade?> </strong> </p>
<p> Bairro: <strong> <?php echo $empresa->bairro?> </strong> </p>
<p> UF: <strong> <?php echo $empresa->uf?> </strong> </p>
<p> Telefone: <strong> <?php echo $empresa->telefone?> </strong> </p>
<p> Celular: <strong> <?php echo $empresa->celular?> </strong> </p>
<p> Observações: <strong> <?php echo $empresa->observacoes?> </strong> </p>
<p> Colaboradores: <strong> <?php echo $empresa->colaboradores?> </strong> </p>



<a href="index.php?pg=excluirempresa&id=<?php echo $empresa->id ?>"><button class="btn btn-primary"> Sim </button></a>
<a href="index.php?pg=listarempresa&id=<?php echo $empresa->id ?>"><button class="btn btn-primary"> Não </button></a>
