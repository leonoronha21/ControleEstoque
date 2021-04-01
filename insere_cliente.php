<?php
    require_once 'sm.php';
    require_once 'model/Cliente.php';
    
 
    $cliente = new Cliente();
    
   $nome = $_POST["nome"];
   $celular = $_POST["celular"];
   $telefone = $_POST["telefone"];
   $email = $_POST["email"];
   $dataNascimento= $_POST["dataNascimento"];
   $cpf= $_POST["cpf"];
    
   $cliente->setNome($nome);
   $cliente->setCpf($cpf); 
   $cliente->setEmail($email);
   $cliente->setCelular($celular);
   $cliente->setTelefone($telefone);
   $cliente->setdataNascimento($dataNascimento);
   
   $cliente->insert();
   
   $sm->display("consulta_cliente.tpl");
   ?>