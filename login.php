<?php
    require_once 'sm.php';
    require_once 'model/usuario.php';

$servername = "140.238.181.93";
$username = "fdb";
$password = "fdb";
$dbname = "fdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica a conexao
if ($conn->connect_error) {
    die("problema na conexão: " . $conn->connect_error);
}
$usuario = $_POST['usuario'];//armazenando entrada 'nome'
$senha = $_POST['senha'];//armazenando entrada 'senha'
// Realizaa consulta
$sql = "select usuario, senha from leonardoandrade_usuario where usuario='$usuario'and senha='$senha'";  
$result = $conn->query($sql);

$row = mysqli_fetch_array($result);

if($row['usuario']==$usuario && $row['senha']==$senha){
    
    session_start();
    $_SESSION['usuario'] = $row['usuario'];
    
    $variavel=$_SESSION['usuario'];
    
    $sm->assign("variavel", $variavel);
    $sm->display('index_template.tpl');
    
}else{
    $sm->display('login.tpl');
}

?>


