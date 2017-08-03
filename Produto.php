<?php

require_once 'database.php';

class Produto {
    
   private $nome;
   private $preco_desconto;
   private $codigo_desconto;
   
   function __construct($nome, $preco_desconto, $codigo_desconto) {
       $this->nome = $nome;
       $this->preco_desconto = $preco_desconto;
       $this->codigo_desconto = $codigo_desconto;
   }
   
   function getNome() {
       return $this->nome;
   }

   function getPreco_desconto() {
       return $this->preco_desconto;
   }

   function getCodigo_desconto() {
       return $this->codigo_desconto;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setPreco_desconto($preco_desconto) {
       $this->preco_desconto = $preco_desconto;
   }

   function setCodigo_desconto($codigo_desconto) {
       $this->codigo_desconto = $codigo_desconto;
   }
   
   
   function display(){
       
   }

   function desconto(){
       //SUBSTITUIR O PRECO DA vitrineAcesso PELO PREÇO COM DESCONTO
       //ASSOCIAR O DESCONTO COM O USUARIO
   }
   
   

}
