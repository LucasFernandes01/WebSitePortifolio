<header>
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
                
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                    </ul>
   
            <!-- ================== MODAL TRIGGERS ============================== --> 
            <!--<div class="container">-->
                <ul class="nav navbar-nav navbar-right" style="padding-right: 20px;"> 
                    <li>
                        <!-- LOGIN -->
                        <a href="loginPage.php">
                            Login <span class="glyphicon glyphicon-log-in"></span>
                          </a>   
                    </li>  
                </ul>
            </div>      
       </div>
    </nav><!-- ================================== END NAVBAR ======================================================== -->
    
    
    <!-- =============================== MODAL LOGIN POP-UP ================================= -->
    <div class="modal fade in" role="document" id="loginModal">
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
                     <form class="center-block" method="POST" action="./login.php" id="form-login" 
                           name="form-login" onsubmit="return validaLogin();">

                        <!-- INPUT EMAIL --> 
                        <div class="form-group">
                            <input type="text"  class="form-control input-lg" placeholder="Email" 
                                   name="Email" id="Email" required>                            
                        </div>

                        <!-- INPUT SENHA --> 
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Senha"
                                   name="Senha" id="Senha" required>
                        </div>

                        <!-- BOTAO SUBMIT/LOGIN -->
                        <div class="form-group">
                            <input type="submit" name="cadastrar" class="btn btn-block btn-primary" value="Login" onclick="">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div> 

    <!-- =============================== END MODAL  LOGIN POP-UP ============================= -->  
</header>   
