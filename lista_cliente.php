<?php

require_once 'sm.php';
require_once 'model/Cliente.php';

      
   $nome = $_POST["nome"];
   $celular = $_POST["celular"];
   $telefone = $_POST["telefone"];
   $email = $_POST["email"];
   $dataNascimento= $_POST["dataNascimento"];
   $cpf= $_POST["cpf"]; 


$id = $_GET['id_cliente'];
$acao = $_GET['acao'];

//echo $acao;


$variavel = new Cliente(); /// isntancia a classe

$lista = $variavel->select();
$variavel = "";

$sm->assign("variavel", $variavel);
$sm->assign("lista", $lista);
$sm->display("consulta_cliente.tpl");
?>