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


           
<form action="update_fornecedor.php" method="post"> 
            ID    : <input type=text name=idp  value = {$id}> </input>    <br> 
            NOME FANTASIA: <input type=text name=nome value = {$variavel_nome} ></input>    <br>
            RAZÃO SOCIAL: <input type=text name=cpf value = {$variavel_razao} ></input>  <br>
            TELEFONE: <input type=text name=telefone value = {$variavel_telefone} ></input>  <br>
            CNPJ: <input type=text name=celular value = {$variavel_cnpj} ></input>  <br>
            E-MAIL: <input type=text name=email value = {$variavel_email} ></input>  <br>
            SITE: <input type=text name=dataNascimento value = {$variavel_site} ></input>  <br>
            ENDEREÇO: <input type=text name=dataNascimento value = {$variavel_endereco} ></input>  <br>
            
            <input type=submit value="OK"> 

           
            
        </form>
    
            

</body>
</form>
</html>