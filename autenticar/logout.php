<?php
require_once './validarSessao.php';

if ($logado){
    session_destroy();
    header("Location: ../login.php");
}

