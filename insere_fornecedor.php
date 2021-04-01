<?php
    require_once 'sm.php';
    require_once 'model/Fornecedor.php';
    
 
    $fornecedor = new Fornecedor();
    
   $nome_fantasia = $_POST["nome"];
   $razao_social = $_POST["razao"];
   $cnpj = $_POST["cnpj"];
   $telefone_fornecedor = $_POST["telefone"];
   $endereco = $_POST["endereco"];
   $site = $_POST["site"];
   $email_fornecedor = ["email"];    
    
   $fornecedor->setNomeFantasia($nome_fantasia);
   $fornecedor->setrazao($razao_social); 
   $fornecedor->setCnpj($cnpj);
   $fornecedor->setEndereco($endereco);
   $fornecedor->setTelefone($telefone_fornecedor);
   $fornecedor->setSite($site);
   $fornecedor->setEmail_Fornecedor($email_fornecedor);
   
   
   
   $fornecedor->insert();
   
   
   $sm->display("consulta_fornecedor.tpl");
   ?>