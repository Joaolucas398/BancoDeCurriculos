<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Banco de Currículos</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php?pg=home">Bancode Currículos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?pg=home"><span class="sr-only">(página atual)</span></a>
      </li>

          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Aluno
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?pg=formaluno">Cadastra</a>
        
      </li>




            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Empresa
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?pg=formempresa">Cadastra</a>
         
        
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?pg=formlogin">Login de Acesso</a>
          
        
      </li>

    </ul>
   
  </div>
</nav>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

          <!-- conteudo da pagina -->  
      <div class="container">
        <?php
        if(isset($_GET["pg"])){
          switch ($_GET["pg"]) {
            case "home";
              include "Formularios/home.php";
              break;

              //Formularios

              case "formaluno":
              include "Formularios/aluno/FormAluno.php";
              break;

              case "formescola":
              include "Formularios/escola/FormEscola.php";             
              break;

              case "formempresa":
              include "Formularios/empresa/FormEmpresa.php";
              break;

               case "formusuario":
              include "Formularios/usuario/FormUsuario.php";
              break;

              
              case "forminteresses":
              include "Formularios/interesses/FormInteresses.php";
              break;

          // Ações//


              // usuario//

              case "detalharusuario":
              include "acoes/usuario/DetalharUsuario.php";
              break;

              case "cadastrousuario":
              include "acoes/usuario/CadastroUsuario.php";
              break;

              case "atualizausuario":
              include "acoes/usuario/AtualizaUsuario.php";
              break;

              case "listarusuario":
              include "acoes/usuario/ListarUsuario.php";
              break;

              case "confirmaexclusaousuario":
              include "acoes/usuario/ConfirmaExclusao.php";
              break;

              case "excluirusuario":
              include "acoes/usuario/ExcluirUsuario.php";
              break;


              //Escola//

              case "cadastroescola":
              include "acoes/escola/CadastroEscola.php";
              break;

              case "detalharescola":
              include "acoes/escola/DetalharEscola.php";
              break;

              case "atualizarescola":
              include "acoes/escola/AtualizarEscola.php";
              break;          

              case "listarescola":
              include "acoes/escola/ListarEscola.php";
              break;

              case "confirmaexclusaoescola":
              include "acoes/escola/ConfirmaExclusao.php";
              break;

              case "excluirescola":
              include "acoes/escola/ExcluirEscola.php";
              break;


              //Interesses//

              case "cadastrointeresses":
              include "acoes/interesses/CadastroInteresses.php";
              break;

              case "detalharinteresses":
              include "acoes/interesses/DetalharInteresses.php";
              break;
 
              case "atualizainteresses":
              include "acoes/interesses/AtualizaInteresses.php";
              break;

              //Aluno//

              case "cadastroaluno":
              include "acoes/aluno/CadastroAluno.php";
              break;

              case "detalharaluno":
              include "acoes/aluno/DetalharAluno.php";
              break;

              case "atualizaaluno":
              include "acoes/aluno/AtualizarAluno.php";
              break;

              case "listaraluno":
              include "acoes/aluno/ListarAluno.php";
              break;

              case "excluiraluno":
              include "acoes/aluno/ExcluirAluno.php";
              break;

              case "confirmaexcluiraluno":
              include "acoes/aluno/ConfirmaExclusao.php";
              break;

              case "pesquisaaluno":
              include "acoes/aluno/PesquisaAluno.php";
              break;



              //Empresa//

              case "cadastroempresa":
              include "acoes/empresa/CadastroEmpresa.php";
              break;

              case "detalharempresa":
              include "acoes/empresa/DetalharEmpresa.php";
              break;

              case "atualizaempresa":
              include "acoes/empresa/AtualizaEmpresa.php";
              break;

              case "listarempresa":
              include "acoes/empresa/ListarEmpresa.php";
              break;

              case "confirmaexclusaoempresa":
              include "acoes/empresa/ConfirmaExclusao.php";
              break;

              case "excluirempresa":
              include "acoes/empresa/ExcluirEmpresa.php";
              break;

              case "pesquisaempresa":
              include "acoes/empresa/PesquisaEmpresa.php";
              break;



               // Formularios de atualização//
                 case "formatualizausuario":
              include "Formularios/usuario/FormAtualizarUsuario.php";
              break;

               case "formatualizarescola":
              include "Formularios/escola/FormAtualizaEscola.php";
              break;

              case "formatualizainteresses":
              include "Formularios/interesses/FormAtualizaInteresses.php";
              break;

              case "formatualizaraluno":
              include "Formularios/aluno/FormAtualizaAluno.php";
              break;

              case "formatualizarempresa":
              include "Formularios/empresa/FormAtualizaEmpresa.php";
              break;

              //forms web\\

              case "formpesquisaaluno":
              include "web/aluno/FormPesquisaAluno.php";
              break;

              case "formpesquisaempresa":
              include "web/empresa/FormPesquisaEmpresa.php";
              break;

              //LOGIN\\

              case "formlogin":
              include "Formularios/login/FormLogin.php";
              break;

              case "login":
              include "acoes/login/login.php";
              break;

              //descrições\\

              case "motivo":
              include "web/motivo/motivo.php";
              break;





              

               

















           }   

            
          }else{
            include "Formularios/home.php";
          }

        ?>
      </div>    
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jQuery.js" ></script>
      
      <script src="js/bootstrap.min.js" ></script>
       <script src="js/jquery.mask.js" ></script>
       <script src="js/Mascaras.js" ></script>
      
      

  </body>

</html>
