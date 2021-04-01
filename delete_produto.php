<?php
require_once 'sm.php'; // chama o smarty
require_once './session.php';
require_once './model/Produto.php';

   
    $novo  =  new Produto();
    $id_produto= $_GET['id_produto'];
    

    $novo->setId_produto($id_produto);
    $dados =  $novo->delete();  /// 
    $sm->assign("lista",$dados);
    header('Location:listaprodutos.php');

?>