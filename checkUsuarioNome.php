<?php
 require 'database.php';    

 //RECUPERANDO NOME
 if( isset($_POST["nome"]) ){
     
     $sql = "SELECT * FROM usuarios WHERE nome = '".$_POST["nome"]."' ";
     $result = DBExecute($sql);
         if(mysqli_num_rows($result) > 0){
             echo "0";
     }else{
         echo "1";
     }  
 }
 