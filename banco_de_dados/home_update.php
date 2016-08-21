<?php
require_once '../dependencias/config.php';
/* 
 * Software Desenvolvido por: João Carlos
 * Todos os Direitos reservados para JC - Soluções em TI
 */

function atualizar_estagiarios (){
    conecta_banco();
    $busca = 'select * from usuario where tipo = "estagiario";';
    $sql = mysql_query($busca);
    while($exibe = mysql_fetch_assoc($sql)){
        echo '<tr class="success">';
        echo '<td>'.$exibe["id"].'</td>';
        echo '<td>'.$exibe["nome"].'</td>';
        echo '<td>'.$exibe["turno"].'</td>';
        echo '<td><a href="https://drive.google.com/file/d/0B9-H17oZwXJIbWtMWWp3RjdGamM0RktiWTZDVjUxMGdVNTNF/view?usp=sharing">avaliar</a></td>';
    }
}

