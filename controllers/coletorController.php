<?php
require_once('../imports_stilos/imports_stiles.php');
require_once('../Connections/Conexao.php');
require_once('../Connections/ConexaoUser.php');
include_once('../model/coletorModel.php');

$seuId = $_GET['id'];

$Obj = new DB();
$link = $Obj->connecta_mysql();
$query_coletores = "SELECT * FROM coletores where col_codigo = $seuId";
$result = mysqli_query($link, $query_coletores);



if ($result) {
    while ($registros = mysqli_fetch_array($result)) {
        $col_coletor = $registros['col_codigo'];
        $cid_municipio = $registros['cid_municipio'];
        $reg_regiao = $registros['reg_regiao'];
        $dep_departamento = $registros['dep_departamento'];
        $marca = $registros['marca'];
        $mdc_modelo = $registros['mdc_modelo'];
        $serial = $registros['serial'];
        $mlb_serial = $registros['mlb_serial'];
        $no_lugar_da = $registros['no_lugar_da'];
        $patrimonio = $registros['patrimonio'];
        $garantia = $registros['garantia'];
        $numero_coletor = $registros['numero_coletor'];
        $boot_code = $registros['boot_code'];
        $os_code = $registros['os_code'];
        $bateria = $registros['bateria'];
        $data_compra = $registros['data_compra'];
        $data_sucateamento = $registros['data_sucateamento'];
        $data_emprestimo = $registros['data_emprestimo'];
        $data_edicao = $registros['data_edicao'];
        $idusuario = $registros['idusuario'];
        $observacoes = $registros['observacoes'];
        $cartao_memoria = $registros['cartao_memoria'];
        $sts_codigo = $registros['sts_status'];
    }
} else {
    echo "Atenção ! não existe";
}

$Obj_user = new DBUser();
$link_user = $Obj_user->connecta_mysql();
$query_usuario = "SELECT * FROM usuario where idusuario = $idusuario";
$result_user = mysqli_query($link_user, $query_usuario);

if ($result_user) {
    while ($registro_user = mysqli_fetch_array($result_user)) {
        $usuario = $registro_user['nome'];
    }
} else {
    echo '
    <br>
    <div class="container">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>ATENÇÃO!</strong> Não existe registro para esse ID.: ' . $seuId . '
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    </div>
    ';
}
