<?php
require_once '../banco_de_dados/conexao.php';

$pesquisa = isset($_POST['busca_estagiarios']) ? $_POST['busca_estagiarios'] : '';

$geral = "select * from usuario where nome like '%".$pesquisa."%' or email like '%".$pesquisa."%' or turno like '%".$pesquisa."%'"; 



function resultados ($clausula){
conecta_banco();
$sql = mysql_query($clausula);

    while($exibe = mysql_fetch_assoc($sql)){
        //echo $exibe["titulo"] .'<br>';
        if($exibe["tipo"]=="estagiario"){
        echo '<div class="list-group col-md-offset-4 col-md-6" id=retorno_filtro>';
            echo '<a href="./estagiario_profile.php?id='.$exibe["id"].'" class="list-group-item">';
                echo '<h4 class="list-group-item-heading" id = "retorno_filtro">'.$exibe["nome"].'</h4>';
                echo '<p class="list-group-item-text">'.$exibe["turno"].'</p>';
            echo '</a>';
        echo '</div>';  
fecha_banco();
        }
}
}

