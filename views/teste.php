<?php
    require_once('../ControllerModel/modelLogin.php');
    $obj = new login();
    $obj->setLogin("Phelype");
    $nome = $obj->getLogin();
    echo$nome;
?>