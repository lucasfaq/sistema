<?php

    require_once "../classes/conexao.php";
    require_once "../classes/usuarios.php";

    $obj = new usuarios();

    $dados=array(
        $_POST['usuario'],
        $_POST['senha']
    );

    echo $obj->logarusuario($dados);
?>