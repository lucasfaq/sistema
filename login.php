
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>Login</title>
    
    <link rel="icon" type="image/x-png" href="img/imgs/Favicon-2.png">    
	<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script src="js/funcoes.js"></script>

</head>
<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel-danger">
                    <div class="panel-header">
                        <img id="consmarca" src="img/imgs/Marca%20Consultar%202.png">
                    </div>
                        <div class="panel-body">
                            <form id="login">
                                <label for="usuario">Usuário</label>
                                <input id="usuario" name="usuario" class="form-control input-sm" type="text" placeholder="Nome de Usuário">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <label for="senha">Senha</label>
                                <input id="senha" class="form-control" type="text" placeholder="Digite sua Senha">
                                <i class="fab fa-keycdn" aria-hidden="true"></i>
                                <br><br><br>
                                <span class="btn btn-primary" id="registro">Entrar</span>
                            </form>
                        </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">

    $(document).ready(function(){
        
        $('#registro').click(function(){
            
            vazios = validarFormVazio('login');
            
            if(vazios > 0){
                
                alert("Preencha os Campos!!");
                return false;
            }
            
            dados=$("#login").serialize();
            
            $.ajax({
                
                type:"POST",
                data: dados,
                URL: "proced/reguser.php",
                
                
                success: function(r){
                    
                    alert(r);
                    
                    if(r==1){
                        
                        alert("inserido con sucesso!!");    
                        
                    }else{
                        
                        alert("erro ao inserir");
                    }
                }
            });
        });   
    });
</script>