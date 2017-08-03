<?php
   
//CADASTRANDO USUÁRIO

    require_once './Usuario.php';
    
    //PEGANDO O QUE FOI DIGITADO NO FORM
    $nome  = mysqli_real_escape_string( DBConnect(), $_POST['InputNome'] );
    $email = mysqli_real_escape_string( DBConnect(), $_POST['InputEmail'] );
    $senha = mysqli_real_escape_string( DBConnect(), $_POST['InputSenha'] ); 
    
    //INSTANCIANDO....
    $usu = new usuario($nome, $email, $senha);
    
    //CHAMANDO O QUE VAI SALVAR NO BANCO
    if( $usu->cadastrar ){
        header('location: success.php');
    }
    else{
        header('location: error.php');
    }
    
   