<?php
require_once 'model/dbConnection.php';

class ClienteTO extends dbConnection{
      
      private $id_cliente;
      private $nome;
      private $cpf;
      private $telefone;
      private $celular;
      private $email;
      private $dataNascimento;
    
      
      public function getId(){
          return $this->id_cliente;
      }
      public function setIdCliente($id_cliente){
          $this->id_cliente = $id_cliente;
      }
       public function getNome(){
          return $this->nome;
      }
      public function setNome($nome){
          $this->nome = $nome;
      }
       public function getcpf(){
          return $this->cpf;
      }
      public function setCpf($cpf){
          $this->cpf = $cpf;
      }
       public function gettelefone(){
          return $this->telefone;
      }
      public function setTelefone($telefone){
          $this->telefone = $telefone;
      }
       public function getCelular(){
          return $this->celular;
      }
      public function setCelular($celular){
          $this->celular = $celular;
      }
       public function getEmail(){
          return $this->email;
      }
      public function setEmail($email){
          $this->email = $email;
      }
     
        public function getDataNascimento(){
          return $this->dataNascimento;
      }
      public function setdataNascimento($dataNascimento){
          $this->dataNascimento = $dataNascimento;
      }
  }

?>

