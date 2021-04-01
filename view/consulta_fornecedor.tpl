<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/estilo.css" rel="stylesheet">
<script>
    $(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});
</script>
</head>

<body> 
{include file="menu.tpl"}
       <form action="lista_fornecedor.php" method="post"> 
   <div class="container">
            <h2>Fornecedores Cadastrados</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Fantasia</th>
                        <th>Site</th>
                        <th>Endereço</th>
                        <th>Telefone</th>                       
                        <th>E-mail</th>
                     
                         
                    
               
                <tbody>
            {foreach from=$lista item=row}
            <tr>
                <td>{$row.id_fornecedor}</td>
                <td>{$row.nome}</td>
                <td>{$row.site}</td>
                <td>{$row.endereco}</td>
                <td>{$row.telefone}</td>
                <td>{$row.email}</td>

               <td><a href="delete_fornecedor.php?acao=d&id_fornecedor={$row.id_fornecedor}" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span></a></td>

                <td><a href="update_fornecedor.php?acao=u&id_fornecedor={$row.id_fornecedor}" class="add-project" data-toggle="modal" data-target="#add_project">Atualizar</a></td>
           </tr>
            {/foreach }
        </tbody>
            </table>
        </div>
   </form>
</body>
</html>