<?php
require_once 'sm.php'; // chama o smarty
require_once './session.php';
require_once './model/Cliente.php';

   
    $novo  =  new Cliente();
    $id_cliente= $_GET['id_cliente'];
    

    $novo->setIdCliente($id_cliente);
    $dados =  $novo->delete();  /// 
    $sm->assign("lista",$dados);
    header('Location:lista_cliente.php');

?>