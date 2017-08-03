<?php 
    
    require_once './Usuario.php';
   
    $email = mysqli_real_escape_string(DBConnect() ,$_POST['InputEmail']); //PREVININDO SQL INJECTION
    $senha = mysqli_real_escape_string(DBConnect(), $_POST['InputSenha']); //PREVININDO SQL INJECTION
    
    $usu = new usuario($email, $senha);
    
    $usu->login($email,$senha);