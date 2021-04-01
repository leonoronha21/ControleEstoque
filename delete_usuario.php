<?php
require_once 'sm.php'; // chama o smarty
require_once './session.php';
require_once './model/usuario.php';

   
    $novo  =  new usuario();
    $id_usuario= $_GET['id_usuario'];
    

    $novo->setId_usuario($id_usuario);
    $dados =  $novo->delete();  /// 
    $sm->assign("lista",$dados);
    header('Location:consulta_usuario.php');

?>