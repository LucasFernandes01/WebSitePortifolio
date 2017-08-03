<?php

 require 'database.php';

 if(isset($_POST["email"])){
     
     $sql = "SELECT * FROM usuarios WHERE email = '".$_POST["email"]."'  ";
     $result = DBExecute($sql);
     
     if(mysqli_num_rows($result) > 0){
         echo '<span class="text-danger">Este email já está em uso</span>';
     }else{
         echo '<span class="text-success">Email diponível</span>';
     }
     
 }