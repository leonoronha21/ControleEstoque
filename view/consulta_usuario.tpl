<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="css/estilo.css" rel="stylesheet">
</head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body>
  <html>
<head> </head>

<body> 
{include file="menu.tpl"}
<form action="consulta_usuario.php" method="post"> 

 
 
 
   <div class="container">
            <h2>Usuários Cadastrados</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Usuário</th>
                        <th>Senha</th>
                     
                         
                    
               
                <tbody>
            {foreach from=$lista item=row}
            <tr>
                <td>{$row.id_usuario}</td>
                <td>{$row.nome}</td>
                <td>{$row.usuario}</td>
                <td>{$row.senha}</td>
{*               <td><a href="delete_usuario.php?acao=d&id_usuario={$row.id_usuario}">deletar</a></td>*}
               <td><a href="delete_usuario.php?acao=d&id_usuario={$row.id_usuario}" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span></a></td>
{*                <td><a href="update_usuario.php?acao=u&id_usuario={$row.id_usuario}">atualizar</a></td>*}
                    <td><a href="update_usuario.php?acao=u&id_usuario={$row.id_usuario}" class="add-project" data-toggle="modal" data-target="#add_project">Atualizar</a></td>
                      
           </tr>
            {/foreach }
        </tbody>
            </table>
        </div>
            
  
 
 



</form>
</body>
</html>