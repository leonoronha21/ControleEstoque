<?php
    require_once 'sm.php';
    require_once 'model/usuario.php';
    
 
    $usuario1 = new usuario();
    
   $nome = $_POST["nome"];
   $usuario = $_POST["usuario"];
   $senha = $_POST["senha"];
    
   $usuario1->setNome_usuario($nome);
   $usuario1->setUsuario($usuario); 
   $usuario1->setSenha($senha);
   
   $usuario1->insert();
   
   
   $sm->display("login.tpl");
   ?>