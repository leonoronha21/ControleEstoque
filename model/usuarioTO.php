<?php
require_once 'model/dbConnection.php';

class usuarioTO extends dbConnection{
    
    private $id_usuario;
    private $nome_usuario;
    private $usuario;
    private $senha;
    

    
    
    
     public function getId_usuario(){
          return $this->id_usuario;
      }
      public function setId_usuario($id_usuario){
          $this->id_usuario = $id_usuario;
      }
      public function getNome_usuario(){
          return $this->nome_usuario;
      }
      public function setNome_usuario($nome_usuario){
          $this->nome_usuario = $nome_usuario;
      }
      public function getUsuario(){
          return $this->usuario;
      }
      public function setUsuario($usuario){
          $this->usuario = $usuario;
      }
      public function getSenha(){
          return $this->senha;
      }
      public function setSenha($senha){
          $this->senha = $senha;
      }
      
               
    
    
}


?>
