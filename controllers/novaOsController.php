<?php
require_once('../imports_stilos/imports_stiles.php');
require_once('../Connections/Conexao.php');
require_once('../Connections/ConexaoUser.php');
include_once('../model/historicoModel.php');

$seuId = $_GET['id'];

$col_codigo = $seuId;
$hco_codigo = '56565656';