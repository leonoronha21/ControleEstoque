<?php


require_once 'sm.php';
require_once 'model/Cliente.php';

      
   $nome = $_POST["nome"];
   $celular = $_POST["celular"];
   $telefone = $_POST["telefone"];
   $email = $_POST["email"];
   $dataNascimento= $_POST["dataNascimento"];
   $cpf= $_POST["cpf"]; 

    $idp    = $_POST['idp'];

    $id = $_GET['id_cliente'];
    $acao = $_GET['acao'];

if (isset($id))
{
$idp =    $id; 
    
}    
$variavel = new Cliente(); /// isntancia a classe
//incluir
if(isset($nome))
{    
    $variavel->setIdCliente($idp);
    $variavel->setNome($nome);
    $variavel->setCelular($celular);
    $variavel->setCpf($cpf);
    $variavel->setTelefone($telefone);
    $variavel->setEmail($email);
    $variavel->setdataNascimento($dataNascimento);
    
    $variavel->update();
}

$lista = $variavel->setIdCliente($idp);
$lista = $variavel->select("where id_cliente=$idp");


$id       = $lista[0]['id_cliente'];
$variavel_nome = $lista[0]['nome'];
$variavel_celular = $lista[0]['celular'];
$variavel_cpf = $lista[0]['cpf'];
$variavel_telefone = $lista[0]['telefone'];
$variavel_email = $lista[0]['email'];
$variavel_dataNascimento = $lista[0]['dataNascimento'];

$sm->assign("id", $id);
$sm->assign("variavel_nome", $variavel_nome);
$sm->assign("variavel_celular", $variavel_celular);
$sm->assign("variavel_cpf", $variavel_cpf);
$sm->assign("variavel_telefone", $variavel_telefone);
$sm->assign("variavel_email", $variavel_email);
$sm->assign("variavel_dataNascimento", $variavel_dataNascimento);
$sm->assign("lista", $lista);
$sm->display("update_cliente.tpl");
?>
