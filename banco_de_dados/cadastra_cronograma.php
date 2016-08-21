<?php
/* 
 * Software Desenvolvido por: João Carlos
 * Todos os Direitos reservados para JC - Soluções em TI
 */

function agenda_cronograma (){

require_once '../banco_de_dados/conexao.php';

conecta_banco();


$nome_cronograma = isset($_POST['nome_cronograma']) ? $_POST['nome_cronograma'] : '';
$setor_cronograma = isset($_POST['cronograma_setor']) ? $_POST['cronograma_setor'] : '';
$data_entrada = isset($_POST['data_entrada']) ? $_POST['data_entrada'] : '';
$data_saida = isset($_POST['data_saida']) ? $_POST['data_saida'] : '';


//Buscar número de estagiários em período de tempo



$buscar = "SELECT data_entrada,data_saida "
        . "FROM cronograma "
        . "WHERE data_entrada >= '$data_entrada' AND "
        . "data_saida <= '$data_saida' "
        . "AND id_setor = '$setor_cronograma' ";


$verifica = mysql_query($buscar);

$limite_setor = 4;

if (mysql_num_rows($verifica) >= $limite_setor) {
    
        $valida_limite = 0;
    
} else {

    $valida_limite = 1;
     
}


$sql = "select usuario.id from usuario where usuario.nome = '$nome_cronograma'";



if( !$ref = mysql_query($sql) ){
    echo "3";
}

$row = mysql_fetch_assoc($ref);

$nome_id_user = $row['id'];

$sql2 = "select estagiario.id from estagiario INNER JOIN usuario ON estagiario.id_usuario = usuario.id where usuario.id = '$nome_id_user'";

if( !$ref2 = mysql_query($sql2) ){
    print (mysql_error());
}

$row2 = mysql_fetch_assoc($ref2);

$nome_id = $row2['id'];


if ($valida_limite == 1){
    $cadastrar_cronograma = "INSERT INTO cronograma (id_setor, id_estagiario, data_entrada, data_saida) VALUES ('$setor_cronograma','$nome_id','$data_entrada','$data_saida');";
    $envia_banco = mysql_query($cadastrar_cronograma);# or print(mysql_error());
    echo '<div class="alert alert-success col-md-offset-3 col-md-6">';
    echo '<strong> Sucesso! </strong> Cronograma agendado com sucesso';
    echo '</div>';
        
    
}
else if ($valida_limite == 0){
    echo '<div class="alert alert-danger col-md-offset-4 col-md-6">';
    echo '<strong> Setor Cheio! </strong> No periodo selecionado o setor encontra-se cheio.';
    echo '</div>';
}



}