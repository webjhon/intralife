<html>
<head>
  <meta charset="UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- CSS Bootstrap -->
  <script src="js/jquery-2.1.4.min.js"></script> <!-- jQuery -->
  <script src="js/bootstrap.min.js"></script> <!-- Javascript Bootstrap -->
  <script src="js/custom.js"></script> <!-- Javascript Bootstrap -->
  <link href="css/style_custom.css" rel="stylesheet"> <!-- CSS Pessoal -->

 
  
  <title>ACESSO RESTRITO</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="img-responsive login-title text-center">
          <img src="img/logo_intranet.png" alt="Logo do Site"/>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" method="POST" id="formulario_login" >
          <h2 class="text-center login-title"> Acesso Restrito</h2>
          <label for="login" class="sr-only"></label>
          <input type="text" name="login" id="login" class="form-control" autofocus="" required="" placeholder="Digite o Login"><br>
          <label for="senha" class="sr-only"></label>
          <input type="password" name="senha" id ="senha" class="form-control" autofocus="" required="" placeholder="Digite a senha"><br>
          <input type ="submit" id="login_envia" name="login_envia" class="btn btn-lg btn-primary btn-block" value="ENTRAR">
        </form>
        
          <div id="msg_sucesso">
              <div class="alert alert-success">
                <strong> Tudo certo!</strong> Você esta sendo direcionado para o sistema...
          </div>
              <div>
                  <img src="img/ajax-loader-orange-transparent.gif" alt="loading"class="img-responsive center-block loader">
              </div>
          </div>
          <div id="msg_erro">
              <div class="alert alert-danger">
                <strong> Algo deu errado </strong> Entre em contato com o RH
              </div>
          </div>
      </div>
    </div>
  </div>
</body>
</html>
