<!DOCTYPE html>
<html>
<head>
    
  <meta charset='utf-8'>
  <title>Desconto</title>
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

  <script src="ajax/loginCheck.js"></script>
  
  
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
  

</head>
<body>
    
<!-- HEADER -->
<?php require 'header.php';?> 

   <!-- CARROSSEL-->
   <?php require 'carousel.php'?>
    
    <div class="container-fluid" style="padding-top:30px;">    
        <div class="row">
        <?php
            //PEGANDO OS PRODUTOS PARA MOSTRÁ-LOS NA VITRINE
            require 'database.php';
            $sql = "SELECT * FROM produtos ORDER BY product_id ASC";
            $result = DBExecute($sql);
            $count = 0;    
            while($row = mysqli_fetch_array($result))
            {    
                $count++;
        ?> 
    <!-- ================= THUMBNAIL PRODUTO ================================================== -->        
            <div class="col-sm-4">
                  <div class="thumbnail">
                      <img src="images/<?php echo $row["nome"].'.jpg';?>" class="img-responsive" style="width:100%"
                           alt="Image">
                      <div class="caption">
                            <center>
                              <b> <?php echo $row["nome"];?> </b> 
                               <h1> <?php echo "R$".$row["preco"];?>  </h1>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#produtoModal_<?php echo $count;?>"
                                id="button_<?php echo $count;?>" >
                                    Obter desconto
                                </button>
                            </center>
                      </div>
                  </div>    
              </div>
            
    <!-- =============================== MODAL PRODUTO  INDEX ================================= -->
    <div class="modal fade in" role="dialog" id="produtoModal_<?php echo $count;?>" name="produtoModal_<?php echo $count;?>" style="margin-top: 80px;">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"> 
                    <div class="caption">
                        <h1 class="text-center">
                            <center> É necessário estar logado(a)! </center>
                        </h1>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
    <!-- =============================== END MODAL PRODUTO  ============================= -->
    
        <?php } //FIM DO WHILE?> 
        </div>    
    </div>    
<!--  FOOTER -->
<?php require 'footer.php';?>

</body>
</html>
