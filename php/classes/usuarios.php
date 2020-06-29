<?php
    class usuarios{
        
        public function registrarusuario($dados){
            
            $registrar = new conectar();
            $conexao=$registrar->conexao();
            
            $data = date('Y-m-d');
            
            $sql = "INSERT into usuarios (nome, usuario, email, senha, datalog) VALUES ('$dados[0]','$dados[1]','$dados[2]','$dados[3]','$data')";
            
            return mysqli_query($conexao, $sql);
        }
        
        public function logarusuario($dados){
            
            $registrar = new conectar();
            $conexao=$registrar->conexao();
            
            session_start();
            $_SESSION['usuarios'] = $dados[0];
            $_SESSION['id'] = self::trazerid($dados);
            
            $sql = "SELECT * from usuarios where usuario = '$dados[0]' and senha = '$dados[1]'";
            
            $result = mysqli_query($conexao, $sql);
            
            if(mysqli_num_rows($result) > 0){
                return "funcionou";
            }
        }
        
        public function trazerid($dados){
            
            $registrar = new conectar();
            $conexao=$registrar->conexao();
            
            $sql = "SELECT id from usuarios where usuario = '$dados[0]' and senha = '$dados[1]'";
            
            $result = mysqli_query($conexao, $sql);
            return mysqli_fetch_row($result)[0];
        }
        
    }
    
?>