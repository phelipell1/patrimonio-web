<?php
    class DB{
        private $host = 'localhost';
        private $usuario = 'admin';
        private $senha = 'U01U3eSARPK10Tl9';
        private $database = 'patrimonio';

        public function connecta_mysql(){
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
            mysqli_set_charset($con,'utf8');

            if(mysqli_connect_errno()){
               echo mysqli_error($con);
            }
            return $con;
        }
    }
?>