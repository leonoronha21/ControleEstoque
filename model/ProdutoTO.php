<?php
require_once 'model/dbConnection.php';

class ProdutoTO extends dbConnection{
    
   


   private $id_produto;
   public $nome;
   public $preco;
   public $descricao;
   public $quantidade;
   
   
   
    public function getId_produto(){
         return $this->id_produto;
     }
    public function setId_produto($id_produto){
           $this->id_produto = $id_produto;
    }
    public function getNome_produto(){
          return $this->nome;
      }
    public function setNome_produto($nome){
          $this->nome = $nome;
    }
    public function getPreco(){
          return $this->preco;
      }
    public function setPreco($preco){
          $this->preco = $preco;
    }
    public function getDescricao(){
          return $this->descricao;
    } 
    public function setDescricao($descricao){
          $this->descricao = $descricao;
    }
        public function getQuantidade(){
         return $this->quantidade;
    }
    public function setQuantidade($quantidade){
          $this->quantidade = $quantidade;
    }
    

}

?>