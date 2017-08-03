<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="jQuery/jquery-3.2.1.min"></script>
        <!-- BOOTSTRAP JAVASCRIPT -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- My Css -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <!--HEADER -->
        <?php require 'header-login.php';?>
        
        <div class="modal-dialog modal-md"  style="margin-top: 100px;">
            <div class="modal-content">     
                <h1 class="text-center">Login</h1>    
                <div class="modal-body">
                    
                     <!-- FORMULÁRIO -->
                     <form class="center-block" method="POST" action="login.php" id="form-login" 
                           name="form-login" onsubmit="return validaLogin();">
                         
                        <!-- EMAIL INPUT -->
                        <div class="form-group">
                            <input type="text"  class="form-control input-lg" placeholder="Email" 
                                   name="InputEmail" id="InputEmail" required>                            
                        </div>
                        
                        <!-- SENHA INPUT -->
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Senha"
                                   name="InputSenha" id="InputSenha" required>
                        </div>

                        <!-- BOTAO SUBMIT/LOGIN -->
                        <div class="form-group">
                            <input type="submit" name="cadastrar" class="btn btn-block btn-primary" value="Login" onclick="">
                        </div>
                            
                    </form>
                     <div class="error"></div>
                </div>
                
            </div>
        </div>
        <script src="validaLogin"></script>  
        <script src="ajax/checkLoginUsuario.js"></script>
    </body>
</html>
    