<?php
 require 'database.php';    

 //RECUPERANDO NOME
 if( isset($_POST["nome"]) ){
     
     $sql = "SELECT * FROM usuarios WHERE nome = '".$_POST["nome"]."' ";
     $result = DBExecute($sql);
         if(mysqli_num_rows($result) > 0){
         //echo '<span class="text-danger">Este nome já está em uso</span>';
             echo 0;
     }else{
        // echo '<span class="text-success">Nome diponível</span>';
         echo 1;
     }  
 }
 