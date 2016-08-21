<?php

require_once '../banco_de_dados/conexao.php';
 
$login = $_POST['login'];
$senha = $_POST['pwd'];


conecta_banco();
$buscar = "SELECT * FROM usuario WHERE login = '$login' and senha = '$senha'";
$verifica = mysql_query($buscar);

if (mysql_num_rows($verifica) <= 0) {
   echo "0";
    
} else {
       
        session_start();
        $registro = mysql_fetch_array($verifica);
        $_SESSION["nome_usuario"] = $registro['nome'];
        $_SESSION['cod_usuario'] = $registro['id'];
        $_SESSION['email_usuario'] = $registro['email'];
        echo "1";
       // header("Location: ./sistemaRH/index.php");
     
}











