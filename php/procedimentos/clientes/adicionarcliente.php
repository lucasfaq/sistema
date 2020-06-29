<?php
    require_once "../classes/conexao.php";
    require_once "../classes/clientes.php";

    $obj = new clientes();

    $dados=array(
        $_POST['nome'],
        $_POST['rg'],
        $_POST['cpf'],
        $_POST['sexo'],
        $_POST['datanascimento'],
        $_POST['residencial'],
        $_POST['movel']
    );
    
    echo $obj->adicionarcliente($dados);
?>