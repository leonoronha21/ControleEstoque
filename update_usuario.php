<?php

require_once 'sm.php';
require_once 'model/usuario.php';

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$idp    = $_POST['idp'];

$id = $_GET['id_usuario'];
$acao = $_GET['acao'];

if (isset($id))
{
$idp =    $id; 
    
}    
$variavel = new usuario(); /// isntancia a classe
//incluir
if(isset($nome))
{    
    $variavel->setId_usuario($idp);
    $variavel->setNome_usuario($nome);
    $variavel->setUsuario($usuario);
    $variavel->setSenha($senha);
    
    $variavel->update();
}

$lista = $variavel->setId_usuario($idp);
$lista = $variavel->select("where id_usuario=$idp");


$id       = $lista[0]['id_usuario'];
$variavel_nome = $lista[0]['nome'];
$variavel_usuario = $lista[0]['usuario'];
$variavel_senha = $lista[0]['senha'];

$sm->assign("id", $id);
$sm->assign("variavel_nome", $variavel_nome);
$sm->assign("variavel_senha", $variavel_usuario);
$sm->assign("variavel_usuario", $variavel_senha);
$sm->assign("lista", $lista);
$sm->display("update.tpl");
?>
