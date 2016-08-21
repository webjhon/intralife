<html>
<head>
  <meta charset="UTF-8">
  <?php require_once '../dependencias/config.php';?>
  <?php require_once '../banco_de_dados/home_update.php'; ?>
  <?php require_once '../banco_de_dados/conexao.php';?>
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
              <li class="active">
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
              <li>
                  <a href="../autenticar/logout.php"> Sair </a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              </li>
            </ul>
          </div>
        </nav>
      </div>
        <div class="col-md-12">
           <table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Estagiários
						</th>
						<th>
							Turno
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<!--<tr>
						<td>
							1
						</td>
						<td>
							João Ernesto Paiva
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Certo
						</td>
					</tr>-->
					<tr class="active">
                                            <?php atualizar_estagiarios();?>
						<!--<td>
							1
						</td>
						<td>
							Pedro Henrique Denardin
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Certo
						</td>-->
					</tr><!--
					<tr class="success">
						<td>
							2
						</td>
						<td>
							Claudio Augusto Stockel
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Certo
						</td>
					</tr>
					<tr class="warning">
						<td>
							3
						</td>
						<td>
							Pedro Henrique Mouretti
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							Pendente
						</td>
					</tr>
					<tr class="danger">
						<td>
							4
						</td>
						<td>
							Paola Oliveira Ecletica
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							Não avaliada
						</td>
					</tr>-->
				</tbody>
			</table>
      </div>
    </div>
  </div>
</body>
</html>
