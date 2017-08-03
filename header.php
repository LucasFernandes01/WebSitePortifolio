<header>
    <div class="jumbotron"  style="background-color: #3366ff; height:450px;">
      <div class="container-fluid text-center" style="padding-top: 160px;">
        <h1 style="color: white;">ⓓⓔ$ⓒⓞⓝⓣⓞ</h1>      
        <p style="color: white">Obtenha o seu!</p>
      </div>
    </div>
    
     <!--NAVBAR -->
    <nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
       <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
          </div>

          <div class="collapse navbar-collapse" id="myNavbar">
            <!-- ================== MODAL TRIGGERS ============================== -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!-- LOGIN -->
                          <a href="#" data-toggle="modal" data-target="#loginModal">
                            Login <span class="glyphicon glyphicon-log-in"></span>
                          </a>   
                    </li>
                    <li>
                         <!-- CADASTRO -->
                        <a href="cadPage.php">
                         Cadastre-se <span class="glyphicon glyphicon-user"></span>
                        </a>    
                    </li> 
                </ul>
            </div>      
       </div>
    </nav><!-- ================================== END NAVBAR ======================================================== -->
    
    
    <!-- =============================== MODAL LOGIN POP-UP ================================= -->
    <div class="modal fade in" role="dialog" id="loginModal" name="loginModal" style="margin-top: 100px;">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="text-center">
                        <label for="login">Login</label>
                    </h1>  
                </div>
                <div class="modal-body">

                    <!-- FORMULÁRIO -->
                    <form class="center-block" method="POST"  action="login.php" id="form-login" 
                     name="form-login">

                       <!-- INPUT EMAIL --> 
                       <div class="form-group">
                           <input type="email"  class="form-control input-lg" placeholder="Email" 
                                  name="InputEmail" id="InputEmail" maxlength="200" required>                            
                       </div>

                       <!-- INPUT SENHA --> 
                       <div class="form-group">
                           <input type="password" class="form-control input-lg" placeholder="Senha"
                                  name="InputSenha" id="InputSenha" maxlength="200" required>
                       </div>

                       <!-- BOTAO SUBMIT/LOGIN -->
                       <div class="form-group">
                           <input type="submit" id="loginButton" name="submit" class="btn btn-block btn-primary"
                            value="Login">
                       </div>
                   </form>
            </div>
            </div>
        </div>
    </div> 

    <!-- =============================== END MODAL  LOGIN POP-UP ============================= -->

    <!-- ============================== MODAL CADASTRO POP-UP   =============================== -->
	
	
    <div class="modal fade modal-md" id="cadModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">  
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                     <h1 class="text-center">
                         <label for="cadastre-se">Cadastre-se</label>
                     </h1>  
                </div>

                    <div class="modal-body">

                     <!-- FORMULÁRIO -->
                     <form class="center-block" method="POST" action="cadastrar.php" id="form-cadastro" 
                           name="form-cadastro" onsubmit="return validaCad();">

                        <!-- NOME INPUT -->
                        <div class="form-group">
                            <input type="text"  class="form-control input-lg" placeholder="Nome" 
                                   name="InputNome" id="InputNome" required>                            
                        </div>

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

                        <!-- CONFIRMA SENHA INPUT -->  
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Confirme a Senha"
                                   name="InputConfirmaSenha" id="InputConfirmaSenha" required>
                        </div> 

                        <!-- BOTAO SUBMIT/CADASTRE-SE -->
                        <div class="form-group">
                            <input type="submit" name="cadastrar" class="btn btn-block btn-primary" value="Enviar" onclick="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    <!-- ==============================  END MODAL CADASTRO     =============================== -->      
</header>