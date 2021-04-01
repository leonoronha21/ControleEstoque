<?php

require_once 'sm.php';
require_once 'model/Produto.php';

$nome = $post['nome'];
$descricao = $post['descricao'];
$preco = $post['preco'];
$quantidade = $post['quantidade'];


$id = $_GET['id_produto'];
$acao = $_GET['acao'];

//echo $acao;


$variavel = new Produto(); /// isntancia a classe
///////////////////////////
//incluir

switch ($acao) {
    case 'u':
        $variavel->setId_produto($id);
        $variavel->setNome_produto($nome);
        $variavel->setDescricao($descricao);
        $variavel->setQuantidade($quantidade);
        $variavel->setPreco($preco);
        
        $variavel->update();
        break;
    
    case 'd':
         $variavel->setId_produto($id);
         $variavel->delete();
        break;

    default:
        
        break;
}

$lista = $variavel->select();
$variavel = "";

$sm->assign("variavel", $variavel);
$sm->assign("lista", $lista);
$sm->display("lista_produtos.tpl");
?>
