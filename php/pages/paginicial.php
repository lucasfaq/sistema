<?php
    session_start();
    if (isset($_SESSION["usuarios"])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once "../classes/base.php"?>
        <link rel="stylesheet" href="../../css/sysgeral.css">
        <title>Página Inicial</title>
    </head>
    <body>
        <div class="systopo">
            <nav>
                <ul class="menu">
                    <li><img src="../../img/IconeConsultar.png"></li>
                    <li><a href="paginicial.php"><button class="btnl btnl-1">Início</button></a></li>
                    <li><a href="#"><button class="btnl btnl-1">Lançamentos</button></a>
                        <ul>
                            <li><a href="atendimentos.php"><button class="btnl btnl-1">Atendimentos</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Ordens de Compra</button></a></li>               
                        </ul>
                    </li>                 
                    <li><a href="#"><button class="btnl btnl-1">Cadastros</button></a>
                        <ul>
                            <li><a href="#"><button class="btnl btnl-1">Empresas</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Clientes</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Fornecedores</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Serviços</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Insumos</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Preços</button></a></li>                    
                        </ul>
                    </li>                
                    <li><a href="#"><button class="btnl btnl-1">Consultas</button></a>
                        <ul>
                            <li><a href="#"><button class="btnl btnl-1">Empresas</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Clientes</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Fornecedores</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Serviços</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Insumos</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Preços</button></a></li>                    
                            <li><a href="#"><button class="btnl btnl-1">Ordens de Compra</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Atendimentos</button></a></li>                   
                        </ul>
                    </li>
                    <li><a href="#"><button class="btnl btnl-1">Relatórios</button></a>
                        <ul>
                            <li><a href="#"><button class="btnl btnl-1">Empresas</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Clientes</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Fornecedores</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Serviços</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Insumos</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Preços</button></a></li>                    
                            <li><a href="#"><button class="btnl btnl-1">Ordens de Compra</button></a></li>
                            <li><a href="#"><button class="btnl btnl-1">Atendimentos</button></a></li>                   
                        </ul>
                    </li>                               
                </ul>
            </nav>
        </div>
    </body>
</html>
<?php
} else {
        header("location:login.php");
    }
?>