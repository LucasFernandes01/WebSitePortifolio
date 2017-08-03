    <?php

    //INICIANDO A SESSAO PARA PEGAR O VALOR DO DESCONTO...
    session_start();

    require_once 'database.php';

    if( isset($_POST["codigo"]) && isset($_POST["id"]) ){

        //FAZ O SELECT COM BASE NO CODIGO DIGITADO
        $sql = "SELECT preco_desconto FROM produtos WHERE codigo_desconto = '".$_POST["codigo"]."' AND product_id = '".$_POST["id"]."' "; 

        $result = (DBExecute($sql));//EXECUTA....

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_row($result);
            $preco_desconto = $row[0];
            $_SESSION['preco_desconto'] = $preco_desconto;// ARMAZENANDO EM UMA VARIAVEL DE SESSAO PARA SER MOSTRADO NA VITRINE

             echo "R$".$_SESSION["preco_desconto"];
            
        }
        else{
            $return = "CÓDIGO INVÁLIDO";
            echo $return;
        }

    }