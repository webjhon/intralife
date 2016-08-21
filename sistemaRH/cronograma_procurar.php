<html>
<head>
  <meta charset="UTF-8">
   <?php require_once '../dependencias/config.php';?>
  <title>Nome do Sistema</title>
</head>
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
              <li class="dropdown">
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
              <li class="dropdown active">
                <a href="cronograma.php" class="dropdown-toggle" data-toggle="dropdown">Cronograma<strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                  <li>
                      <a href="cronograma_procurar.php">Buscar</a>
                  </li>
                  <li>
                      <a href="gera_cronograma.php">Gerar</a>
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
    <div class="col-md-12">
      <form class="form-horizontal">
        <fieldset>

          <!-- Form Name -->
          <legend>Procurar Cronogramas</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="busca_estagiarios">Procurar</label>
            <div class="col-md-6">
              <input id="busca_estagiarios" name="busca_estagiarios" type="text" placeholder="Busque área,setor ou gestor" class="form-control input-md" required="">

            </div>
          </div>

        </fieldset>
      </form>
    </div>
  </div>
</div>
</body>
</html>
