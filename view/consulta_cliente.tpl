<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="css/estilo.css" rel="stylesheet">
</head>

<body>
  <html>
<head> </head>

<body> 
{include file="menu.tpl"}
<form action="lista_cliente.php" method="post"> 

 
 
 
   <div class="container">
            <h2>Clientes Cadastrados</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>                       
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Data Nascimento</th>
                        <th>CPF</th>
                <tbody>
            {foreach from=$lista item=row}
            <tr>
                <td>{$row.id_cliente}</td>
                <td>{$row.nome}</td>
                <td>{$row.telefone}</td>
                <td>{$row.email}</td>
                <td>{$row.dataNascimento}</td>
                <td>{$row.cpf}</td>

            <td><a href="delete_cliente.php?acao=d&id_cliente={$row.id_cliente}" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span></a></td>

             <td><a href="update_cliente.php?acao=u&id_cliente={$row.id_cliente}" class="add-project" data-toggle="modal" data-target="#add_project">Atualizar</a></td>
           </tr>
            {/foreach }
        </tbody>
            </table>
        </div>
            
  
 
 



</form>
</body>
</html>