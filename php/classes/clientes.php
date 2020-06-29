<?php
    class clientes{
        
        public function adicionarcliente($dados){
            
            $registrar = new conectar();
            $conexao=$registrar->conexao();
            
            $data = date('Y-m-d');
            
            $sql = "INSERT into clientes (nome, rg, cpf, sexo, datanascimento, residencial, movel, datalog) VALUES ('$dados[1]','$dados[2]','$dados[3]','$dados[4]','$dados[5]','$dados[6]','$dados[7]','$data')";
            
            return mysqli_query($conexao, $sql);
        }
    
?>