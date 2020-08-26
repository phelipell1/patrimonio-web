<?php
    class DBUser{
        private $host = '127.0.0.1';
        private $usuario = 'admin';
        private $senha = '123456789';
        private $database = 'controle_usuarios';

        public function connecta_mysql(){
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
            mysqli_set_charset($con,'utf8');

            if(mysqli_connect_errno()){
                echo 'ERROR AO SE CONECTAR'.'<br>'.mysqli_connect_error();
            }
            return $con;
        }
    }
?>