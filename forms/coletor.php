<?php
require_once('../imports_stilos/imports_stiles.php');
require_once('../Connections/Conexao.php');

$Obj = new DB();
$link = $Obj->connecta_mysql();
?>
<script>
//Irá passar o ID do UF para buscar cidades correspondentes a UF
$(document).ready(function() {
        $("#cbmEstado").change(function() {
            var valor = $('#cbmEstado option:selected').val();
            $.ajax({
                url: '../controllers/busca_cidade_uf.php?uf=valor',
                method: 'post',
                data: {
                    ufs: $('#cbmEstado').val()
                },
                success: function(data) {
                    $('#cid_Codigo').html(data).show();
                }
            });
        });
});

$("#btn-mensagem").click(function(){
    $("#modal-mensagem").modal();
});
</script>
<div class="shadow-lg mb-5 p-3 rounded border">
    <div class="col-sm-12">
        <div class="row">
            <div class="form-group col-sm-1">
                <label for="cbmEstado" class="col-form-label">Estato:</label>
                <select name="cbmEstado" id="cbmEstado" class="form-control form-control-sm">
                <?
                    $sql = "SELECT * FROM cadestado";
                    $result = mysqli_query($link, $sql);
                    if($result == false){
                        echo'
                        <option select>UF</option>
                        </select>';
                    }else {
                        while($reg = mysqli_fetch_array($result)){
                            echo'<option value="'.$reg['est_codigo'].'">'.$reg['est_uf'].'</option>';
                        }
                    }
                    
                ?>
                </select>
            </div>

            <div class="form-group col-sm-2">
                <label for="cbmRegiao" class="col-form-label">Região:</label>
                <select name="cbmRegiao" id="cbmRegiao" class="form-control form-control-sm">
                <?
                    $sql = "SELECT * FROM regiao ORDER BY reg_regiao";
                    $result = mysqli_query($link, $sql);
                    if($result == false){
                        echo'
                        <option select>Selecione</option>
                        </select>';
                    }else {
                        while($reg = mysqli_fetch_array($result)){
                            echo'<option value="'.$reg['reg_codigo'].'">'.$reg['reg_regiao'].'</option>';
                        }
                    }
                    
                ?>
                </select>
            </div>

            <div class="form-group col-sm-2">
                <label for="cbmCidade" class="col-form-label">Cidade:</label>
                <select name="cid_Codigo" id="cid_Codigo" class="form-control form-control-sm">
                    <option select>Selcione</option>
                </select>
            </div>

            <div class="form-group col-sm-2">
                <label for="cbmDepartamento" class="col-form-label">Departamento:</label>
                <select name="cbmDepartamento" id="cbmDepartamento" class="form-control form-control-sm">
                <?
                    $sql = "SELECT * FROM departamento ORDER BY dep_departamento";
                    $result = mysqli_query($link, $sql);
                    if($result == false){
                        echo'
                        <option select>Selecione</option>
                        </select>';
                    }else {
                        while($reg = mysqli_fetch_array($result)){
                            echo'<option value="'.$reg['dep_codigo'].'">'.$reg['dep_departamento'].'</option>';
                        }
                    }
                    
                ?>
                </select>
            </div>

            <div class="form-group">
                <input type="text" name="textBusca" id="textBusca"
                    class="form-control-sm form-control col-sm-4 float-right">
            </div>
            <div class="">
                <button type="button" id="btn_Busca" class="btn btn-sm btn-primary">Buscar</button>
            </div>

        </div>

        <form action="">

            <div class="row">
                <div class="col-sm-12 scrollBar" >
                    <table class="table table-sm tabela">
                        <thead>
                            <tr class="">
                                <th scope="col">Departamento</th>
                                <th scope="col">N° Coletor</th>
                                <th scope="col">Série/IMEI</th>
                                <th scope="col">Patrimônio</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Status</th>
                                <th scope="col">Emprestado</th>
                                <th scope="col">Opção</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?
                            $sql = "select * from table_coletor";
                            $result = mysqli_query($link, $sql);
                            if($result){
                                while($reg = mysqli_fetch_array($result)){
                                    echo'
                                    <tr>
                                    <th>'.$reg['dep_departamento'].'</th>
                                    <td>'.$reg['numero_coletor'].'</td>
                                    <td>'.$reg['serial'].'</td>
                                    <td>'.$reg['patrimonio'].'</td>
                                    <td>'.$reg['mdc_modelo'].'</td>
                                    <td>'.$reg['sts_status'].'</td>
                                    <td>'.$reg['dateEmprestimo'].'</td>
                                    <td><a id="btn-mensagem" href="../forms/coletor_detalhes.php?id='.$reg["col_codigo"].'" class="btn btn-sm btn-success">Detalhes</a></td>
                                </tr>
                                    ';
                                }
                            }else{
                                echo 'Error: '.mysqli_error($link);
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>