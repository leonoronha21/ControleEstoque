<?php
    require_once 'sm.php';
    require_once 'model/Produto.php';
    
 
   $produto = new Produto();
    
   $nome = $_POST["nome"];
   $preco = $_POST["preco"];
   $quantidade = $_POST["quantidade"];
   $descricao= $_POST["descricao"];
    
   $produto->setNome_produto($nome);
   $produto->setDescricao($descricao); 
   $produto->setQuantidade($quantidade);
   $produto->setPreco($preco);
   
   $produto->insert();
   
   $sm->display("lista_produtos.tpl");
   ?>