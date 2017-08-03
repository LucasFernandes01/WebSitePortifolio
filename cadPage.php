<!DOCTYPE html>

<html>
    <head>        
        <title>Cadastre-se</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="jQuery/jquery-3.2.1.min.js"></script>
        <!-- BOOTSTRAP JAVASCRIPT -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- My Css -->
        <link rel="stylesheet" href="css/style.css">
        
       <!-- AJAX --> 
       <script src="ajax/checkCad.js"></script>
    </head>
    <body>
        
        <?php require 'header-cadastro.php'; ?>
        
        <div class="modal-dialog modal-md" style="margin-top: 100px;">
            <div class="modal-content">     
                <h1 class="text-center">Cadastre-se</h1>    
                <div class="modal-body">
                    
                     <!-- FORMULÁRIO -->
                     <form class="center-block" method="POST" action="cadastrar.php" id="form-cadastro" 
                        name="form-login">
                         
                         <!-- NOME INPUT -->
                        <div class="form-group">
                            <input type="text"  class="form-control input-lg" placeholder="Nome" 
                                name="InputNome" id="InputNome" onkeyup="checkNome(this.value);" maxlength="200" required>
                            <div id="dispNome"></div>
                        </div>
                         
                        <!-- EMAIL INPUT -->
                        <div class="form-group">
                            <input type="text"  class="form-control input-lg" placeholder="Email" 
                                   name="InputEmail" id="InputEmail" onkeyup="checkEmail(this.value);" maxlength="200" required> 
                                   
                            <div id="dispEmail"> </div>   
                        </div>
                        
                        <!-- SENHA INPUT -->
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Senha"
                                   name="InputSenha" id="InputSenha" maxlength="200" required>
                        </div>
                        
                        <!-- CONFIRMA SENHA INPUT -->  
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Confirme a Senha"
                                   name="InputConfirmaSenha" id="InputConfirmaSenha" maxlength="200"
                                   onkeyup="IsPasswordEqual(this.value)" required>
                            
                            <div id="dispConfirmPwd"></div>
                        </div> 

                        <!-- BOTAO SUBMIT/LOGIN -->
                        <div class="form-group">
                            <input type="submit" id="btnCadastrar" name="btnCadastrar"
                                   class="btn btn-block btn-primary" value="Cadastrar">
                        </div>
                                                
                    </form>
                        
                </div>
            </div>
        </div>  
        <script src="js/validaForm.js"></script>
    </body>
</html>
    