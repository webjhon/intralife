<html>
<head>
  <meta charset="UTF-8">
  <?php require_once '../dependencias/config.php';?>
  <?php require_once '../banco_de_dados/buscarEstagiarios.php';?>
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
              <li class="dropdown active">
                <a href="estagiarios.php" class="dropdown-toggle" data-toggle="dropdown">Estagiários<strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                  <li>
                      <a href="./estagiarios_cadastrar.php">Cadastrar</a>
                  </li>
                  <li>
                      <a href="estagiarios_procurar.php">Procurar</a>
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cronograma<strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="./cronograma_procurar.php">Buscar</a>
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
        <form class="form-horizontal" method="POST">
<fieldset>

<!-- Form Name -->
<legend>PROCURAR ESTAGIÁRIOS</legend>

<!-- Button Drop Down -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttondropdown">Procurar estagiários</label>
  <div class="col-md-6">
    <div class="input-group">
      <input id="buttondropdown" name="busca_estagiarios" class="form-control" placeholder="Nome, Turno, E-mail">
      <div class="input-group-btn">
        <button class="btn btn-default" name="procura_estagiario">
          Buscar
        </button>
      </div>
    </div>
  </div>
</div>

</fieldset>
</form>

 
    <div id="resultado_estagiarios">
        <?php
        if (isset($_POST['procura_estagiario'])) {
            resultados($geral);
        }
       ?>
    </div>
  </div>
</div>
</div>
</body>
</html>
