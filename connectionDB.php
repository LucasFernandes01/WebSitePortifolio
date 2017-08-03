<?php

    include 'configDB.php';
    
//FUNÇÕES DE CONEXÃO AO DB

    
//ABRE CONEXÃO COM MYSQL
function DBConnect(){
$link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE)
        or die("Erro de conexão: " + mysqli_connect_error());

mysqli_set_charset($link, DB_CHARSET);

return $link;
}


//FECHA CONEXÃO
function DBClose($link){
mysqli_close($link) or die(mysqli_error($link));
}


//CONTRA SQL-INJECTION
function DBEscape($dados){
    
    $link = DBConnect();
    
    if($dados){ //SE O VALOR RECEBIDO NÃO FOR UM ARRAY DE CARACTERES
        $dados = mysqli_real_escape_string($link,$dados);
    }
}