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

$idp    = $_POST['idp'];

$id = $_GET['id_fornecedor'];
$acao = $_GET['acao'];

if (isset($id))
{
$idp =    $id; 
    
}    
$variavel = new Fornecedor(); /// isntancia a classe
//incluir
if(isset($nome))
{    
    $variavel->setIdFornecedor($idp);
    $variavel->setNomeFantasia($nome);
    $variavel->setEndereco($endereco);
    $variavel->setSite($site);
    $variavel->setEmail_Fornecedor($descricao);
    $variavel->setrazao($razao);
    $variavel->setCnpj($cnpj);
    $variavel->setTelefone($telefone_fornecedor);
    $variavel->update();
}

$lista = $variavel->setIdFornecedor($idp);
$lista = $variavel->select("where id_fornecedor=$idp");


$id       = $lista[0]['id_fornecedor'];
$variavel_nome = $lista[0]['nome'];
$variavel_razao = $lista[0]['razao'];
$variavel_cnpj = $lista[0]['cnpj'];
$variavel_endereco = $lista[0]['endereco'];
$variavel_site = $lista[0]['site'];
$variavel_email = $lista[0]['email'];
$variavel_telefone = $lista[0]['telefone'];

$sm->assign("id", $id);
$sm->assign("variavel_nome", $variavel_nome);
$sm->assign("variavel_razao", $variavel_razao);
$sm->assign("variavel_cnpj", $variavel_cnpj);
$sm->assign("variavel_endereco", $variavel_endereco);
$sm->assign("variavel_site", $variavel_site);
$sm->assign("variavel_email", $variavel_email);
$sm->assign("variavel_telefone", $variavel_telefone);

$sm->assign("lista", $lista);
$sm->display("update_fornecedor.tpl");
?>
