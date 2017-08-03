<?php
    //PEGANDO OS PRODUTOS PARA MOSTRÁ-LOS NA VITRINE
    require 'database.php';
    $sql = "SELECT * FROM produtos ORDER BY product_id ASC";
    $result = DBExecute($sql);
    
    $count = 0;

    while($row = mysqli_fetch_array($result))
    {       
       $count = $count + 1 ; 
?>
    <div class="col-sm-4">
          <div class="thumbnail">
              <img src="images/<?php echo $row["nome"].'.jpg';?>" class="img-responsive" style="width:100%"
                   alt="Image">
              <div class="caption">

                    <center>

                        <b> <?php echo $row["nome"];?> </b>

                        <!-- DIV ONDE SERÁ MOSTRADA O PREÇO ATUAL E O PRECO COM DESCONTO -->
                      <div id="showPreco_<?php echo $count?>">
                        <h1> <?php echo "R$".$row["preco"];?> </h1> 
                          
                      </div>


                        <button type="button" class="btn btn-danger" name="<?php echo $count?>" id="<?php echo $row["nome"];?>" data-toggle="modal"
                          onclick="carrega(<?php echo $count?>); carregaNomeCampo(this.id, <?php echo $count?>);" data-target="#produtoModal_<?php echo $count?> "> 
                            Obter desconto
                        </button>

                    </center>
              </div>
          </div>
      </div>

    <!-- =============================== MODAL PRODUTO ================================= -->
    <div class="modal fade in" role="document" id="produtoModal_<?php echo $count?>" name="produtoModal_<?php echo $count?>" style="margin-top: 80px;">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <h1 class="text-center">
                        <label for="nomeProduto_<?php echo $count?>">

                            <!-- NOME DO PRODUTO VIA AJAX -->
                            <div id="nomeProduto_<?php echo $count?>"></div> 

                        </label>
                    </h1> 

                </div>

                <div class="modal-body">
                    <div class="caption">

                        <center>

                            <!-- IMAGEM DO PRODUTO VIA AJAX -->
                            <span id="divImg_<?php echo $count?>"></span>

                            <!-- INPUT CÓDIGO DE DESCONTO-->
                            <div class="form-group">
                                <input type="text" class="form-control input-md"
                                    placeholder="Digite o codigo de desconto" 
                                name="InputCodigo"
                                id="input_<?php echo $count?>" name="" maxlength="3" required>
                            </div>

                            <button type="button" id="<?php echo $count?>" class="btn btn-success btn-md"
                                    onclick="precoDesconto( this.id, document.getElementById('<?php echo "input_".$count?>').value, '<?php echo $row["nome"];?>' );">
                                Confirmar
                            </button>

                        </center>

                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- =============================== END MODAL PRODUTO  ============================= -->

        
<?php } ?>
    