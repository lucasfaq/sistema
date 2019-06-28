<?php 
	class users{
		public function reguser($dados){
			$c = new conectar();
			$conexao=$c->conexao();

			$data = date('Y-m-d');

			$sql = "INSERT into usuarios (nome, usuario, email, senha, datalog) VALUES('$dados[0]', '$dados[1]', '$dados[2]', '$dados[3]', '$data')";

			return mysqli_query($conexao, $sql);
        }
    }
 ?>
