<body>
  <div id="login"class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login de Acesso</h5>
            <form class="form-signin" action="index.php?pg=login" method="post">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Endereço de E-mail" required autofocus>
                <label for="inputEmail">E-mail</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
                <label for="inputPassword">Senha</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Lembrar Senha</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

 
<style type="text/css">
  
 body{

  height: 100%;

  
  background-image: url("imagens/logo-ete1.jpg");
  height: 100%;
  background-position: auto;
  background-repeat: no-repeat;
  background-size: cover;
} 

#login{
  opacity:0.9;
}





</style>