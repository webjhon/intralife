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
                      <a href="./gera_cronograma.php">Gerar</a>
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
      <form class="form-horizontal" method="POST"  enctype="multipart/form-data" id="cad_estagiario">
        <fieldset>

          <!-- Form Name -->
          <legend>Cadastrar Estagiários</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nome_estagiario">Nome</label>
            <div class="col-md-5">
              <input id="nome_estagiario" name="nome_estagiario" type="text" placeholder="Nome Completo" class="form-control input-md">
              <div id="nome_vazio">
                <p class="alert alert-warning pull-right">* Você deve preencher um Nome!</p>
              </div>

            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="email_estagiario">email</label>
            <div class="col-md-5">
              <input id="email_estagiario" name="email_estagiario" type="text" placeholder="exemplo@brunning.com.br" class="form-control input-md" required="">
              <div id="email_vazio">
                <p class="alert alert-warning pull-right">* Você deve preencher um e-mail Válido!</p>
              </div>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="login_estagiario">Login</label>
            <div class="col-md-5">
              <input id="login_estagiario" name="login_estagiario" type="text" placeholder="Login de Acesso ao Sistema" class="form-control input-md" required="">
              <div id="login_vazio">
                <p class="alert alert-warning pull-right">* Você deve preencher um Login!</p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="senha_estagiario">Senha</label>
            <div class="col-md-5">
              <input id="senha_estagiario" name="senha_estagiario" type="password" placeholder="Senha de Acesso ao Sistema" class="form-control input-md" required="">
              <div id="senha_vazio">
                <p class="alert alert-warning pull-right">* Você deve preencher uma senha!</p>
              </div>
            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="seleciona_curso">Curso</label>
            <div class="col-md-5">
              <select id="seleciona_curso" name="seleciona_curso" class="form-control">
                <option selected="" disabled="">Escolha o Curso</option>
                <option value="1">Técnico em Eletrônica</option>
                <option value="2">Técnico em Elétrica</option>
                <option value="3">Técnico em Informática</option>
                <option value="4">Engenheiro Mecânico</option>
                <option value="5">Engenharia Elétrica</option>
                <option value="6">Sistemas para Internet</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="seleciona_turno">Turno</label>
            <div class="col-md-5">
              <select id="seleciona_turno" name="seleciona_turno" class="form-control">
                <option selected="" disabled="">Escolha o Turno</option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
              </select>
            </div>
          </div>

          <!-- File Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="foto_botao">Enviar Foto</label>
            <div class="col-md-4">
              <input id="foto_estagiario" name="foto_estagiario" type="file">
              <br>
              <div class="alert alert-danger" id="img_fail">
                <strong> Errado! </strong> O arquivo enviado precisa ser .JPG
              </div>
            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="enviar_cadastro">Enviar</label>
            <div class="col-md-4">
              <button id="enviar_cadastro" name="enviar_cadastro" class="btn btn-success">Cadastrar</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
    <!--</fieldset> -->
    <!-- </form> -->
  </div>
  <div class="row">
    <div id="erro_cadastro">
      <div class="alert alert-danger col-md-offset-3 col-md-6">
        <strong> Ops! </strong> Algo deu errado, procure o setor de TI
      </div>
    </div>
    <div id="cadastro_vazio">
      <div class="alert alert-danger col-md-offset-3 col-md-6">
        <strong> Atenção:  </strong> Você deve preencher todos os campos acima!
      </div>
    </div>
    <div id="cadastro_ok">

      <div class="alert alert-success col-md-offset-3 col-md-6 ">
        <strong> Sucesso! </strong> Cadastro de estagiário efetuado!
      </div>

    </div>
    <div id="loader">
      <img src="../img/loader2.gif" class="img-responsive center-block loader2">
    </div>
  </div>
</div>
</body>
</html>
