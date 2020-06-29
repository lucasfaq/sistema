<?php
    session_start();
    require_once "../classes/conexao.php";
    $obj = new conectar();
    $conexao = $obj->conexao();
    echo session_status();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="icon" type="image/x-png" href="../../img/Favicon.png">
        <link rel="stylesheet" href="../../css/syslogin.css">
        <link rel="stylesheet" href="../../css/plugins.css">
        <script src="../../bower_components/jquery/dist/jquery.js"></script>
        <script src="../../bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>

        <title>Consultar/Audmetra</title>
            
    </head>
    <body>
       <div class="container-fluid">
          <div class="panel panel-default">
             <div class="panel panel-heading">
             <img src="../../img/Marca%20Consultar%203%20todo-branco%20lateral.png">
             </div>
             <div class="panel panel-body">
                <form id="login">
                    <ul>
                        <li>                   
                             <label>Usuário</label>
                             <input id="username" type="text" name="usuario" class="form-control-input" required>
                             <div class="icopos">
                                 <i class="far fa-user" aria-hidden="true"></i>
                             </div>
                        </li> 
                        <li>
                             <label>Senha</label>
                             <input id="senha" type="password" name="senha" class="form-control-input" required>
                             <div class="icopos">
                                 <i class="fas fa-key" aria-hidden="true"></i>
                             </div>
                        </li>     
                    </ul>
                    <div class="butoes">
                        <button type="submit" class="btn btn-primary" id="logar">Login</button>
                        <a href="../../index.html" class="btn btn-default">Voltar</a>
                    </div>
                </form>
            </div>
          </div>
       </div>
    </body>
</html>

<script type="text/javascript" src="../js/btnlogar.js"></script>