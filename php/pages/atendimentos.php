<?php
    session_start();
    if (isset($_SESSION["usuarios"])) {
?>
<!DOCTYPE html>
<html>
<head>
    <?php require_once "../classes/base.php"?>
    <link rel="stylesheet" href="../../css/sysatend.css">
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
                        <li><a href="#"><button class="btnl btnl-1">Atendimentos</button></a></li>
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
    <div class="atendimentos">
        <ul class="menu-atend">
            <li>
                <button class="btnl btnl-1">Medicina Ocupacional</button>
            </li>
            <li><p>|</p></li>
            <li>
                <button class="btnl btnl-1">Clínica Popular</button>
            </li>
        </ul>
        <form class="MO" action="">
            <ul>
                <li>
                    <label for="idAtendimento">Id Atendimento</label><br>
                    <input type="text">
                </li>              
                    <label for="Data">Data do Atendimento</label><br>
                    <input class="datas" type="date">
                <li>    
                    <label for="cliente">Cliente</label><br>
                    <select id="cliente">
                        <option value="">Selecione</option>
                    </select>
                </li>
                <li>
                    <label for="exames">Exames</label><br>
                    <select multiple="multiple" id="selecao">
                        <option value=""></option>
                    </select>
                    <select multiple="multiple" id="selecao">
                        <option value=""></option>
                    </select>
                </li>
            </ul>
            <table class="table table-hover table-condensed table-bordered">
                    <caption><label>Atendimentos</label></caption>
                    <tr>
                        <td>Atendimentos</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#" onclick="">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </span>
                        </td>
                        <td>
                            <span class="btn btn-danger btn-xs" onclick="">
                                <span class="glyphicon glyphicon-remove"></span>
                            </span>
                        </td>
                    </tr>
            </table>
        </form>
    </div>    
</body>
</html>
<?php
} else {
        header("location:login.php");
    }
?>