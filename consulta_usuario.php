<?php

require_once 'sm.php';
require_once 'model/usuario.php';

$nome = $post['nome'];
$usuario = $post['usuario'];
$senha = $post['senha'];

$id = $_GET['id_usuario'];
$acao = $_GET['acao'];

//echo $acao;


$variavel = new Usuario(); /// isntancia a classe
///////////////////////////
//incluir

switch ($acao) {
    case 'u':
        $variavel->setId_usuario($id);
        $variavel->setNome_usuario($nome);
        $variavel->setUsuario($usuario);
        $variavel->setSenha($senha);
        
        $variavel->update();
        break;
    
    case 'd':
         $variavel->setId_usuario($id);
         $variavel->delete();
        break;

    default:
        
        break;
}

$lista = $variavel->select();
$variavel = "";

$sm->assign("variavel", $variavel);
$sm->assign("lista", $lista);
$sm->display("consulta_usuario.tpl");
?>
