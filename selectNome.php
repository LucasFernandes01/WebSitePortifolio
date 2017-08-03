<?php

require 'database.php';

//SELECIONANDO A IMAGEM PELO NOME NO BD..

if(isset($_POST["name"])){ //O ID É O ID DO BOTAO
    
    $sql = "SELECT nome FROM produtos WHERE nome = '".$_POST["name"]."'";
    $result = DBExecute($sql);
    
      if( mysqli_num_rows($result) > 0 ){
          $row = mysqli_fetch_row($result);
          $nomeProdutoModal = $row[0];
          echo $nomeProdutoModal;
      }
      else{
          echo "erro";
      }
    
}
