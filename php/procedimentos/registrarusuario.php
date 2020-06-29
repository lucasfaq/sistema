<?php
    require_once "../classes/conexao.php";
    require_once "../classes/usuarios.php";

    $obj = new usuarios();

    $dados=array(
        $_POST['nome'],
        $_POST['usuario'],
        $_POST['email'],
        $_POST['senha']
    );
    
    echo $obj->registrarusuario($dados);
?>