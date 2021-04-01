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
<form action="listaprodutos.php" method="post"> 
   <div class="container">
            <h2>Produtos Cadastrados</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descricao</th>
                        <th>Quantidade</th>
                        <th>Preço(R$)</th>
                     
                         
                    
               
                <tbody>
            {foreach from=$lista item=row}
            <tr>
                <td>{$row.id_produto}</td>
                <td>{$row.nome}</td>
                <td>{$row.descricao}</td>
                <td>{$row.preco}</td>
                <td>{$row.quantidade}</td>
{*                <td><a href="delete_produto.php?acao=d&id_produto={$row.id_produto}">deletar</a></td>*}
                <td><a href="delete_produto.php?acao=d&id_produto={$row.id_produto}" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span></a></td>
{*                <td><a href="update_produto.php?acao=u&id_produto={$row.id_produto}">atualizar</a></td>*}
                <td><a href="update_produto.php?acao=u&id_produto={$row.id_produto}" class="add-project" data-toggle="modal" data-target="#add_project">Atualizar</a></td>
           </tr>
            {/foreach }
        </tbody>
            </table>
        </div>
            
  
 
 



</form>
</body>
</html>