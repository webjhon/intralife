<html>
<head>
  <meta charset="UTF-8">
  <title>GERAR CRONOGRAMA</title>
  <?php require_once '../dependencias/config.php'; ?>
  <link href="../css/style.css" rel="stylesheet" type="text/css" />
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
              <li class="dropdown">
                <a href="cronograma.php" class="dropdown-toggle active" data-toggle="dropdown">Cronograma<strong class="caret"></strong></a>
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
            <form class="form-horizontal" method="POST" name="form_cronograma" id="form_cronograma">
      <fieldset>

        <!-- Form Name -->
        <legend>Gerar Cronograma</legend>
        <?php
        require_once '../banco_de_dados/conexao.php';
        conecta_banco();
        $select2 = "select * from setor";
        $sql2 = mysql_query($select2);
        
        
        //here
        
        $sql = "select * from usuario where id = $_GET[id]";
        if( !$ref = mysql_query($sql) ){
        die('erro').mysql_error();
        }
        $row = mysql_fetch_assoc($ref);
        
        ?>        

        <!-- Select Basic -->


        <div class="form-group">
          <label class="col-md-4 control-label" for="selectbasic">Estagiário</label>
          <div class="col-md-6">
            <div id="main">
                <input id="search" name = "nome_cronograma" autocomplete="off" type="text" placeholder="Digite nome, turno, curso" class="form-control input-md" required="" value="<?=$row['nome']?>">
		<h4 id="results-text">Resultados para: <b id="search-string">Array</b></h4>
		<ul id="results"></ul>
           </div>              
          </div>
        </div>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="selectbasic">Setor</label>
          <div class="col-md-6">
            <select id="selectbasic" name="cronograma_setor" class="form-control">
                <option disabled="" selected="">Escolher</option>
              <?php while($exibe2 = mysql_fetch_assoc($sql2)){
                //echo $exibe["titulo"] .'<br>';

                  ?>
                  <option value="<?= $exibe2["id"]?>"><?= $exibe2["nome"]?></option>
                  <?php
                }
             ?>                
            </select>
          </div>
        </div>        

   
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="data_entrada">Data</label>
          <div class="col-md-6">
            <input id="data_entrada" name="data_entrada" type="text" placeholder="05/05/2015" class="form-control input-md">

          </div>
        </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="data_entrada">Horário</label>
                <div class="col-md-6">
                <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                         </span>
                </div>
            </div>
            </div>     

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Marcar Ponto</button>
          </div>
        </div>

      </fieldset>
    </form>
            
      <?php
      if(isset($_POST['cronograma_button'])){
          require_once '../banco_de_dados/cadastra_cronograma.php';
          agenda_cronograma();
          
      }
      ?>
     </div>
</div>
  </div>
  </body>
  </html>
