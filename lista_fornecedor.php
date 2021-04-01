<?php

require_once 'sm.php';
require_once 'model/Fornecedor.php';

  
   $nome_fantasia = $_POST["nome"];
   $razao_social = $_POST["razao"];
   $cnpj = $_POST["cnpj"];
   $telefone_fornecedor = $_POST["telefone"];
   $endereco = $_POST["endereco"];
   $site = $_POST["site"];
   $email_fornecedor = ["email"];    


$id = $_GET['id_fornecedor'];
$acao = $_GET['acao'];

//echo $acao;


$variavel = new Fornecedor(); /// isntancia a classe

$lista = $variavel->select();
$variavel = "";

$sm->assign("variavel", $variavel);
$sm->assign("lista", $lista);
$sm->display("consulta_fornecedor.tpl");
?>