<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../CSS/style2.css">
<?php
    session_start();
    require_once('../Connections/Conexao.php');
    $ObjDB = new DB();
    $link = $ObjDB -> connecta_mysql();

    $ids = $_POST['ufs'];

    $query = "SELECT * FROM cadcidade where est_codigo = $ids ORDER BY cid_municipio";
    $resul = mysqli_query($link, $query);

    
    if($resul == false){
        echo'<option value=""></option>';
    }else{
        while($reg = mysqli_fetch_array($resul)){
            echo'
                <option value="'.$reg['cid_codigo'].'">'.$reg['cid_municipio'].'</option>';
        }
    }
?>