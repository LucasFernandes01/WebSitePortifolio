<?php

require 'database.php';

//SELECIONANDO A IMAGEM PELO NOME NO BD..

if(isset($_POST["count"])){ //CONTADOR
    
    //$sql = "SELECT nome FROM produtos WHERE nome = '".$_POST["nome"]."' ";
    $sql = "SELECT nome FROM produtos WHERE product_id = '".$_POST["count"]."' ";
    $result = DBExecute($sql);
    
      if( mysqli_num_rows($result) > 0 ){
          $row = mysqli_fetch_row($result);
          $nomeProduto = $row[0];
          echo '<img src="images/'.$nomeProduto.'.jpg" class="img-responsive" style="width:100%"
                                    alt="Image">';
          //echo $nomeP;
      }
      else{
          echo "erro";
      }
    
    
//    while($row = mysqli_fetch_array($result)){
//        echo '<img src=" images/<?php echo "'.$row["nome"].'" >';
//    }
}
