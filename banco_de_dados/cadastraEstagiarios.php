<?php
require_once ('./conexao.php');
    //Lendo dados via Método POST
    conecta_banco();
    
  
    $nome = $_POST['nome_estagiario'];
    $curso = $_POST['seleciona_curso'];
    $turno = $_POST['seleciona_turno'];
    $login = $_POST['login_estagiario'];
    $senha = $_POST['senha_estagiario'];
    $email = $_POST['email_estagiario'];


    
    
    $fileName1 = pathinfo(basename($_FILES['foto_estagiario']['name']),PATHINFO_FILENAME);
    $fileType1 = pathinfo(basename($_FILES['foto_estagiario']['name']),PATHINFO_EXTENSION);
    
    $foto = $_POST['foto_estagiario'] = $fileName1.'.'.$fileType1;
    
    $_FILES['foto_estagiario']['novoNome'] = $foto;
    
    $target_dir = "../img/fotos/";
    
    $novaPasta = $target_dir.'estagiario_'.$login;
    
    foreach ($_FILES as $key => $value) {
	$target_file = basename($_FILES[$key]["name"]);
	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$fileName = pathinfo($target_file,PATHINFO_FILENAME);
	$target_file = rtrim($target_file,'.'.$fileType);
	#tamanho do arquivo
	if (!file_exists($novaPasta)){
	 mkdir($novaPasta);
	 chmod($novaPasta, 0777);
	}
	$newFile = $_FILES[$key]['novoNome'];
	// echo $newFile.'<br>';
	if(!move_uploaded_file($_FILES[$key]["tmp_name"], $novaPasta.'/'.$newFile)){
              //return 0;
			}
		}
                
           
    
    if(isset($_POST['nome_estagiario']) && isset($_POST['seleciona_curso']) && isset($_POST['seleciona_turno']) && isset($_POST['login_estagiario']) && isset($_POST['senha_estagiario']) && isset($_POST['email_estagiario']) && isset($_FILES['foto_estagiario'])){
    echo "1";    
    //Enviando Dados para mysql
    $cadastrar_usuario = "INSERT INTO usuario ( nome, login, senha, email, foto, turno,tipo)  VALUES ('$nome','$login','$senha','$email','$foto','$turno','estagiario')";
    $envia_banco1 = mysql_query($cadastrar_usuario);
    $ultimo_id = mysql_insert_id(); 
    $cadastrar_estagiario = "INSERT INTO estagiario (id, id_usuario, id_curso) VALUES ('','$ultimo_id','$curso')";
    $envia_banco2 = mysql_query($cadastrar_estagiario);
    
    
    }
    
    else {
       echo "0"; 
    }
    
    /*if ($envia_banco2){
        echo "1";
    }
    else {
        echo "0";
    }*/
        



