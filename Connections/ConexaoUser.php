<?php
    class DBUser{
        private $host = 'localhost';
        private $usuario = 'admin';
        private $senha = 'U01U3eSARPK10Tl9';
        private $database = 'controle_usuarios';

        public function connecta_mysql(){
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
            mysqli_set_charset($con,'utf8');

            if(mysqli_connect_errno()){
                echo 'ERROR AO SE CONECTAR'.mysqli_connect_error();
            }
            return $con;
        }
    }
?>