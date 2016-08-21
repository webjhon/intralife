<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <![endif]-->
  <title>Página de Estagiário</title>
  <?php require_once'../dependencias/config.php'; ?>
</head>
<!-- CONEXÃO COM BANCO DE DADOS -->

<?php
require_once "../banco_de_dados/conexao.php";
conecta_banco();
$sql = "select * from usuario where id = $_GET[id]";
if( !$ref = mysql_query($sql) ){
die('erro').mysql_error();
}
$row = mysql_fetch_assoc($ref);
?>



<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 img-responsive text-center" id="logo">
        <img src="../img/logo_intranet2.png">
      </div>
      <div class="col-md-10" id="menu_topo">
        <nav class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button> <a class="navbar-brand" href="#">RH</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li>
                <a href="index.php">Inicio</a>
              </li>
              <li class="dropdown active">
                <a href="estagiarios.php" class="dropdown-toggle" data-toggle="dropdown">Estagiários<strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="./estagiarios_cadastrar.php">Cadastrar</a>
                  </li>
                  <li>
                    <a href="./estagiarios_procurar.php">Procurar</a>
                  </li>
                  <li>
                    <a href="#">Avisos</a>
                  </li>
                  <li>
                    <a href="#">Relatório</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="cronograma.php" class="dropdown-toggle" data-toggle="dropdown">Cronograma<strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="./cronograma_procurar.php">Buscar</a>
                  </li>
                  <li>
                    <a href="#">Gerar</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="acesso.php">Acesso</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <section style="padding-bottom: 50px; padding-top: 50px;">
      <div class="row">
        <div class="col-md-4">
            <img src="../img/fotos/estagiario_<?=$row['login']?>/<?=$row['foto']?>" class="img-thumbnail img-responsive" />
          <br />
          <br />
          <label>Login Registrado</label>
          <input type="text" class="form-control" value="<?=$row['login']?>">
          <label>Nome Registrado</label>
          <input type="text" class="form-control" value="<?=$row['nome']?>">
          <label>E-mail Registrado</label>
          <input type="text" class="form-control" value="<?=$row['email']?>">
          <br>
          <a href="#" class="btn btn-success">Atualizar detalhes</a>
           <br /><br/>
        </div>
        <div class="col-md-8">
          <div class="alert alert-info">
            <h2>Tela de Usuário: </h2>
            <h4>Todas as informações podem ser alteradas </h4>
            <p>
              Todas as informações aqui postadas, podem ser alteradas. Porém cuidado ao fazer alterações, pois as informações alteradas
              não poderão ser recuperadas.
            </p>
          </div>
          <div >
            <a href="#" class="btn btn-social btn-facebook">
              <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
              <a href="#" class="btn btn-social btn-google">
                <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                <a href="#" class="btn btn-social btn-twitter">
                  <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                  <a href="#" class="btn btn-social btn-linkedin">
                    <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                  </div>
                  <div class="form-group col-md-8">
                    <h3>Mudar senha</h3>
                    <br />
                    <label>Digite a nova senha</label>
                    <input type="password" class="form-control">
                    <label>Confirme a nova senha</label>
                    <input type="password" class="form-control" />
                    <br>
                    <a href="#" class="btn btn-warning">Mudar Senha</a>
                  </div>
                </div>
              </div>
              <!-- ROW END -->


            </section>
            <!-- SECTION END -->
          </div>

        </body>

        </html>
