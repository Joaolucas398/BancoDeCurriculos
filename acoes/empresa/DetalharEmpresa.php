<?php	
//dados da conexão com o banco de dados
include("conexao/conexao.php");

$id = $_GET["id"];
//criando objeto query para armazenar resultado da consulta ao banco
$query= $con->query("SELECT id,nome,cnpj,cpf,email,segmento,endereco,cidade,bairro,uf,telefone,celular,observacoes,colaboradores FROM empresa WHERE id=".$id);

//criando array de objetos convertidos da $query
$empresa = $query->fetch(PDO::FETCH_OBJ);

$query2= $con->query("SELECT id,nome,empresa_id FROM interesses WHERE empresa_id=".$id);

$interesses = $query2->fetchall(PDO::FETCH_ASSOC);

 
?>


<h1>Dados da empresa</h1>

<p> Nome: <strong> <?php echo $empresa->nome?> </strong> </p>
<p> CNPJ: <strong> <?php echo $empresa->cnpj?> </strong> </p>
<p> CPF: <strong> <?php echo $empresa->cpf?> </strong> </p>
<p> Segmento: <strong> <?php echo $empresa->segmento?> </strong> </p>
<p> E-mail: <strong> <?php echo $empresa->email?> </strong> </p>
<p> Endereço: <strong> <?php echo $empresa->endereco?> </strong> </p>
<p> Cidade: <strong> <?php echo $empresa->cidade?> </strong> </p>
<p> Bairro: <strong> <?php echo $empresa->bairro?> </strong> </p>
<p> UF: <strong> <?php echo strtoupper($empresa->uf)?> </strong> </p>
<p> Telefone: <strong> <?php echo $empresa->telefone?> </strong> </p>
<p> Celular: <strong> <?php echo $empresa->celular?> </strong> </p>
<p> Observações: <strong> <?php echo $empresa->observacoes?> </strong> </p>
<p> Colaboradores: <strong> <?php echo $empresa->colaboradores?> </strong> </p>
<h4>Interesses da empresa</h4>

<ul>
<?php
foreach ($interesses as $int ) {
echo "<li>".$int['nome']."</li>";
}	
?>	
</ul>


<a href="index.php?pg=formatualizarempresa&id=<?php echo $empresa->id ?>"><button class="btn btn-primary"> Atualizar empresa</button></a>
<hr>