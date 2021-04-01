<?php
require_once 'sm.php'; // chama o smarty
require_once './session.php';
require_once './model/Fornecedor.php';

   
    $novo  =  new Fornecedor();
    $id_fornecedor= $_GET['id_fornecedor'];
    

    $novo->setIdFornecedor($id_fornecedor);
    $dados =  $novo->delete();  /// 
    $sm->assign("lista",$dados);
    header('Location:lista_fornecedor.php');

?>