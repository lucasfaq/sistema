<?php 
	
	require_once "../classes/conexao.php";
	require_once "../classes/users.php";

	$obj = new users();
    
    $senha = sha1($_POST["senha"]);
	
	$dados = array($_POST['nome'], $_POST['user'], $_POST['email'], $senha);
    
    echo $obj->reguser($dados)


 ?>