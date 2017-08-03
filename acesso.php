<!DOCTYPE html>
<html>
<head>
    <?php

    //VERIFICANDO SE A SESSÃO AINDA EXISTE
    session_start();
    
    if( !isset($_SESSION['nome'])==true && !isset($_SESSION['email']) == true &&
        !isset($_SESSION["preco_desconto"])==true ){

        //CASO NÃO EXISTA ENTAO ELA É DESFEITA E O USUARIO É REDIRECIONADO PARA A PAGINA INICIAL
        session_destroy();
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location:index.php');

    }

    $logado = ucfirst($_SESSION['nome']);

?>
  <meta charset="utf-8">   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- jQuery -->
  <script src="jQuery/jquery-3.2.1.min.js"></script>
  <!-- BOOTSTRAP JAVASCRIPT -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- My Css -->
  <link rel="stylesheet" href="./css/style.css">
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 0; /* MARGEM PARA EVITAR O ESPAÇAMENTO ENTRE O CARROSSEL*/
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    .footer {
      background-color:#222;
      color: #fff;
      padding-top:30px;
    }
    
    .bottom-footer{
        border-top: 1px solid #b2b2b2;
        margin-top: 10px;
        padding-top: 10px;
        color:#b2b2b2;
    }
    
    .footer-nav{
        text-align: right;
        list-style: none;
        
    }
    
    .footer-nav li{
        display:inline;
        padding: 0px 10px;
        
    }
    
    .footer-nav a{
        color: #999999;
        text-decoration: none;
    }
    
    .footer-nav a:hover{
        color:#fff;
    }
    .footer-nav a:active{
        color:#fff;
    }
    
    .carousel-inner img{
        width: 100%;
	margin: auto;
        min-height:200px;
    }
    
    body.modal-open{
       overflow: inherit;
        padding:0 !important;
    }
    
  </style>
  
  <script src="ajax/carregaProduto.js"></script>
  <script src="ajax/recuperaPreco.js"></script>
  
</head>
<body>

    <?php require 'header-sessao.php'?>
    
   <!-- CARROSSEL-->
   <?php require 'carousel.php'?>                

        <div class="container-fluid" style="padding-top:30px;">    
        <div class="row">
        <?php require 'vitrineAcesso.php'?>
        </div>    
    </div>
   <!--  FOOTER -->
<?php require 'footer.php';?>
</body>
</html>
