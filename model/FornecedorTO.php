<?php
require_once 'model/dbConnection.php';

class FornecedorTO extends dbConnection{
    
    private $id_fornecedor;
    private $nomefantasia;
    private $razao;
    private $cnpj;
    private $telefone_fornecedor;
    private $endereco;
    private $site;
    private $email_fornecedor;
    
    public function getId_fornecedor(){
          return $this->id_fornecedor;
      }
      public function setIdFornecedor($id_fornecedor){
          $this->id_fornecedor = $id_fornecedor;
      }
       public function getNomeFantasia(){
          return $this->nomefantasia;
      }
      public function setNomeFantasia($nomefantasia){
          $this->nomefantasia = $nomefantasia;
      }
       public function getrazao(){
          return $this->razao;
      }
      public function setrazao($razao){
          $this->razao = $razao;
      }
       public function getCnpj(){
          return $this->cnpj;
      }
      public function setCnpj($cnpj){
          $this->cnpj = $cnpj;
      }
       public function getTelefone_fornecedor(){
          return $this->telefone_fornecedor;
      }
      public function setTelefone($telefone_fornecedor){
          $this->telefone_fornecedor = $telefone_fornecedor;
      }
       public function getEndereco(){
          return $this->endereco;
      }
      public function setEndereco($endereco){
          $this->endereco = $endereco;
      }
        public function getSite(){
          return $this->site;
      }
      public function setSite($site){
          $this->site = $site;
      }
        public function getEmail_fornecedor(){
          return $this->email_fornecedor;
      }
      public function setEmail_Fornecedor($email_fornecedor){
          $this->email_fornecedor = $email_fornecedor;
      }

  }
    
    


?>