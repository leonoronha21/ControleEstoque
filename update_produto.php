<?php

require_once 'sm.php';
require_once 'model/Produto.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$idp    = $_POST['idp'];

$id = $_GET['id_produto'];
$acao = $_GET['acao'];

if (isset($id))
{
$idp =    $id; 
    
}    
$variavel = new Produto(); /// isntancia a classe
//incluir
if(isset($nome))
{    
    $variavel->setId_produto($idp);
    $variavel->setNome_produto($nome);
    $variavel->setPreco($preco);
    $variavel->setQuantidade($quantidade);
    $variavel->setDescricao($descricao);
    $variavel->update();
}

$lista = $variavel->setId_produto($idp);
$lista = $variavel->select("where id_produto=$idp");


$id       = $lista[0]['id_produto'];
$variavel_nome = $lista[0]['nome'];
$variavel_preco = $lista[0]['preco'];
$variavel_quantidade = $lista[0]['quantidade'];
$variavel_descricao = $lista[0]['descricao'];

$sm->assign("id", $id);
$sm->assign("variavel_nome", $variavel_nome);
$sm->assign("variavel_preco", $variavel_preco);
$sm->assign("variavel_quantidade", $variavel_quantidade);
$sm->assign("variavel_descricao", $variavel_descricao);
$sm->assign("lista", $lista);
$sm->display("update_produto.tpl");
?>
