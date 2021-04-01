<html>
    <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="css/estilo.css" rel="stylesheet">
    </head>

<body> 
{include file="menu.tpl"}
{$variavel}


           
<form action="update_produto.php" method="post"> 
            Id    : <input type=text name=idp  value = {$id}> </input>    <br> 
            Nome: <input type=text name=nome value = {$variavel_nome} ></input>    <br>
            Descrição: <input type=text name=descricao value = {$variavel_descricao} ></input>  <br>
            Preço: <input type=text name=preco value = {$variavel_preco} ></input>  <br>
            Quantidade: <input type=text name=quantidade value = {$variavel_quantidade} ></input>  <br>
            <input type=submit value="OK"> 

           
            
        </form>
    
            

</body>
</form>
</html>