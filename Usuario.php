<?php

require_once 'database.php';

class usuario {
  
   private $nome;
   private $email;
   private $senha;
   
   function __construct($nome, $email, $senha) {
       $this->nome = $nome;
       $this->email = $email;
       $this->senha = $senha;
   }
   
   function getNome() {
       return $this->nome;
   }

   function getEmail() {
       return $this->email;
   }

   function getSenha() {
       return $this->senha;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }
   
   function cadastrar(){
       
        $sql = "INSERT INTO usuarios VALUES(DEFAULT,'$this->email','$this->nome','$this->senha')";
        if(DBExecute($sql)){
            return true;
        }
        else{
            return false;
        }
    }
   
    function login($email, $senha){
        
        //INICIANDO A SESSÃO
        session_start(); 

        //PRIMEIRO, RECUPERANDO O NOME DO USUÁRIO QUE SERÁ MOSTRADO QUANDO ESTE ESTIVER LOGADO
        $nomeSQL = "SELECT nome FROM usuarios WHERE email='$email' AND senha='$senha'";
        $nomeResult = DBExecute($nomeSQL);

        if( mysqli_num_rows($nomeResult) > 0 ){
            $row = mysqli_fetch_row($nomeResult);
            $_SESSION['nome'] = $row[0]; //PEGANDO O PRIMEIRO RESULTADO DO ARRAY, QUE NESSE CASO É O NOME
        }


        //DEPOIS PEGANDO EMAIL E SENHA
        $sql ="SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = DBExecute($sql);

        //SE O USUARIO FOR ENCONTRADO...
        if(mysqli_num_rows($result) > 0){

           //ARMAZENANDO AS INFORMAÇÕES NAS VARIAVEIS DE SESSÃO E REDIRECIONANDO 
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location: acesso.php');

        }
        else{
            session_destroy();
            header('location: loginInvalido.php');

        }
        
   }
      
}
