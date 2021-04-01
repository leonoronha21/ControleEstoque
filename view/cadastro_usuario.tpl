<html>
    <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    H1 { text-align: center }
</style>
    </head>
    <body>
 <div class="container">
     <h1>CADASTRO DE USUÁRIOS</h1>
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                    <form action ="../ProjetoFinal/insere_usuario.php" class="well form-horizontal" method="post" >
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Nome completo</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="nome" name="nome" placeholder="nome" class="form-control" required="true" type="text"></div>
                            </div>
                         </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Usuário</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="usuario" name="usuario" placeholder="usuario" class="form-control" required="true"  type="text"></div>
                            </div>
                         </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Senha</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="senha" name="senha" placeholder="senha" class="senha" required="true" type="text"></div>
                            </div>
                         </div>
                        <button type="submit" class="btn btn-success">Cadastrar</button>      
                      </fieldset>
                   </form>
                </td>
          </tbody>
       </table>
 </div>
    </body>    
</html>