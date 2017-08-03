<?php
    include 'connectionDB.php';
    
    
    // --- EXECUÇÃO DE QUERYS ---
    
    
    //EXECUTA AS QUERYS
    function DBExecute($query){
        
        //ABRINDO CONEXÃO
        $link = DBConnect();
        
        //EXECUTANDO QUERY
        $result = mysqli_query($link,$query) or die(mysqli_error($link));

        //FECHANDO CONEXÃO
        DBClose($link);
        
        return $result;
    }