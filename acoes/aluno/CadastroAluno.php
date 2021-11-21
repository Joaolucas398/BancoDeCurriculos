<?php

function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
}


$nome= $_POST["nome"];
 
$endereco= $_POST["endereco"];
 
$bairro= $_POST["bairro"];
 
$cidade= $_POST["cidade"];
 
$uf= $_POST["uf"];
 
$email= $_POST["email"];
 
$celular= $_POST["celular"];

$nasc= $_POST["nascimento"];
 
$nascimento= inverteData( $_POST["nascimento"]);

$escolaridade= $_POST["escolaridade"];

$curso= $_POST["curso"];

$formacao= $_POST["formacao"];



// diretório de destino do arquivo
 
if (isset($_FILES['pdf']) && !empty($_FILES['pdf']['name']))
{
    // se o "name" estiver vazio, é porque nenhum arquivo foi enviado
     
    $arquivo = $_FILES['pdf'];
 
    // pega a extensão do arquivo
    $ext = explode('.', $arquivo['name']);
    $ext = end($ext);
 
 if($ext=="pdf"){
    // gera o novo nome
    $novoNome = uniqid() . '.' . $ext;
 
    if (!move_uploaded_file($arquivo['tmp_name'],  'arquivos/' . $novoNome))
    {
        echo "Erro ao enviar arquivo";
    }

    include("conexao/conexao.php");
$stmt = $con->prepare('insert INTO aluno (nome,endereco,bairro,cidade,uf,email,celular,nascimento,escolaridade,curso,formacao,pdf) VALUES (:nome, :endereco, :bairro, :cidade, :uf, :email, :celular, :nascimento, :escolaridade, :curso, :formacao, :pdf )');
$stmt->execute(array(':nome'=>$nome,':endereco'=>$endereco,':bairro'=>$bairro,':cidade'=>$cidade,':uf'=>$uf,':email'=>$email,':celular'=>$celular,':nascimento'=>$nascimento,':escolaridade'=>$escolaridade,':curso'=>$curso,':formacao'=>$formacao,':pdf'=>$novoNome));
$id = $con->lastinsertid();


//inserção de interesses


$interesses = $_POST['interesses'];
foreach ($interesses as $int ) {
$stmt = $con->prepare('insert INTO interesses (nome,aluno_id) VALUES (:nome, :aluno_id )');
$stmt->execute(array(':nome'=>$int,':aluno_id'=>$id));

}

//inserção de usuario
$login=$email;
$senha = str_replace("/", "", $nasc);
$senha=md5($senha);
$privilegio= 3;  
$stmt = $con->prepare('insert INTO usuario(nome,login,senha,privilegio,aluno_id) VALUES (:nome, :login, :senha, :privilegio, :aluno_id )');
$stmt->execute(array(':nome'=>$nome,':login'=>$login,':senha'=>$senha,':privilegio'=>$privilegio, 'aluno_id'=>$id));

  }else{
        echo "<div class='alert alert-danger'>Tipo de arquivo inválido. Selecione um arquivo em formato PDF.<a href='javascript:history.back()'>Clique para voltar</a></div>";


  }


}

echo "<script>location.href='index.php?pg=detalharaluno&id=$id';</script>";


 


