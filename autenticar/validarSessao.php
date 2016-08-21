<?php
session_start();
if (isset($_SESSION['nome_usuario'])) {
    $logado = true;
   
} 
else {
    $logado = false;
    session_destroy();
    
}
    

