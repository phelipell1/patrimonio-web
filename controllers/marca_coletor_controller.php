<?php
require_once('../Connections/Conexao.php');
require_once('../Connections/ConexaoUser.php');
include_once('../model/coletorModel.php');

$Obj = new DB();
$link = $Obj->connecta_mysql();
$query_marca = "select * from marca_coletor";
$result = mysqli_query($link, $query_marca);

if ($result) {
    while ($registros = mysqli_fetch_array($result)) {
        
        echo'<option value="'.$registros['mcc_codigo'].'">'.$registros['marca'].'</option>';
    }
} else {
    echo "Atenção ! não existe";
}