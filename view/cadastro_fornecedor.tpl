<html>
    <head>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  
        <link href="css/estilo.css" rel="stylesheet">
       
    </head>
    <body>
        {include file="menu.tpl"}
        <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                      
                    </header>
                </div>
                <div class="user-dashboard">
                     <h1>Cadastrar de Fornecedor</h1>
            <form action="../ProjetoFinal/insere_fornecedor.php" method="post">
            Razão Social: <input type=text name=razao>
            Nome Fantasia:<input type=text name=nome>
            Telefone:<input type="text" name=telefone  placeholder="Ex.: (00) 0000-0000"><br><br>
            Endereço: <input type=text name=endereco>
            Site: <input type=text name=site>
            Email: <input type=text name=email>
            CNPJ:<input type="text" name=cnpj placeholder="Ex.:000.000/000-00"><br><br>
            <input type=submit value="Cadastrar"></form> 
                </div>
            </div>
   
    </body>
</html>