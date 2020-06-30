<?php
require_once('../imports_stilos/imports_stiles.php');
require_once('../Connections/Conexao.php');

$Obj = new DB();
$link = $Obj->connecta_mysql();
?>
<script>
$(document).ready(function() {
    $("#txtNumero").mask("(00)00000-0000");
    //Configurações botões
    $("#btn_Imprime_historico").hide();
    //$("#btn_Editar").hide();
    $("#btn_Cancelar").hide();
    $("#btn_Nova_Ordem").hide();
    $("#btn_historico").hide();
    $("#btn_Sair").show();
    $("#fildsetChip").hide();
    $("#fildSetStatusColetor").hide();
    $("#spanStatus").hide();

    $("#btn_Sair").click(function() {
        window.location.href = "../views/homepage.php";
    });

    $("#btn_Editar").click(function(){
        $("#fildSetStatusColetor").show();
        $("#spanStatus").hide();
        $("#btn_Cancelar").show();
    });
    
    $("#btn_Cancelar").click(function(){
        $("#btn_Editar").hide();
        $("#btn_Cancelar").hide();
        $("#fildSetStatusColetor").hide();
        $("#spanStatus").show();
    });

});
</script>
<div class="shadow-lg mb-5 p-3 rounded border">
    <div class="col-sm-12">
        <div class="row">
            <div class="form-group col-sm-1">
                <label for="cbmEstado" class="col-form-label">Estato:</label>
                <select name="cbmEstado" id="cbmEstado" class="form-control form-control-sm">
                    <option select></option>
                </select>
            </div>

            <div class="form-group col-sm-2">
                <label for="cbmRegiao" class="col-form-label">Região:</label>
                <select name="cbmRegiao" id="cbmRegiao" class="form-control form-control-sm">
                    <option select>Selcione</option>
                </select>
            </div>

            <div class="form-group col-sm-2">
                <label for="cbmCidade" class="col-form-label">Cidade:</label>
                <select name="cbmCidade" id="cbmCidade" class="form-control form-control-sm">
                    <option select>Selcione</option>
                </select>
            </div>

            <div class="form-group col-sm-2">
                <label for="cbmDepartamento" class="col-form-label">Departamento:</label>
                <select name="cbmDepartamento" id="cbmDepartamento" class="form-control form-control-sm">
                    <option select>Selcione</option>
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
                <div class="col-sm-6 scrollBar" >
                    <table class="table table-sm tabela">
                        <thead>
                            <tr class="tr-tamanhos">
                                <th scope="col">Dp</th>
                                <th scope="col">N° Coletor</th>
                                <th scope="col">Série/IMEI</th>
                                <th scope="col">Patrimônio</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Status</th>
                                <th scope="col">Emprestado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?
                            $sql = "select * from coletor";
                            $result = mysqli_query($link, $sql);
                            if($result){
                                while($reg = mysqli_fetch_array($result)){
                                    echo'
                                    <tr>
                                    <th>'.$reg['dep_codigo'].'</th>
                                    <td>'.$reg['numero_coletor'].'</td>
                                    <td>'.$reg['serial'].'</td>
                                    <td>'.$reg['patrimonio'].'</td>
                                    <td>'.$reg['mcc_codigo'].'</td>
                                    <td>'.$reg['mdc_codigo'].'</td>
                                    <td>'.$reg['data_emprestimo'].'</td>
                                </tr>
                                    ';
                                }
                            }
                            
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-4">

                    <div>
                        <label for="">Código do Coletor:</label>
                        <input type="text" name="txtCodColetor" id="txtCodColetor" class="col-sm-3 float-right">
                    </div>

                    <div>
                        <label for="">Marca:</label>
                        <select type="text" name="cbmMarca" id="cbmMarca" class="col-sm-6 float-right">
                            <option value=""></option>
                        </select>
                    </div>

                    <div>
                        <label for="">Modelo:</label>
                        <select type="text" name="cbmModelo" id="cbmModelo" class="col-sm-6 float-right">
                            <option value=""></option>
                        </select>
                    </div>

                    <div>
                        <label for="">Data Compra:</label>
                        <input type="text" name="txtDataCompra" id="txtDataCompra" class="col-sm-6 float-right">
                    </div>

                    <div>
                        <label for="">Data Sucata:</label>
                        <input type="text" name="txtDataSucata" id="txtDataSucata" class="col-sm-6 float-right">
                    </div>

                    <div>
                        <label for="">Data do Empres:</label>
                        <input type="text" name="txtDataEmprestimo" id="txtDataEmprestimo" class="col-sm-6 float-right">
                    </div>

                    <div>
                        <label for="">Col. Reserva:</label>
                        <input type="text" name="txtColReserva" id="txtColReserva" class="col-sm-6 float-right">
                    </div>

                    <div>
                        <label for="">N° Série:</label>
                        <input type="text" name="textNumSerie" id="textNumSerie" class="col-sm-6 float-right">
                    </div>

                    <div>
                        <label for="">Serial MLB:</label>
                        <input type="text" name="textSerialMlb" id="textSerialMlb" class="col-sm-6 float-right">
                    </div>

                    <div>
                        <label for="">N° Bateria:</label>
                        <input type="text" name="txtNumBateria" id="txtNumBateria" class="col-sm-6 float-right">
                    </div>

                    <div>
                        <label for="">N° Patrimônio:</label>
                        <input type="text" name="textNumPatrimonio" id="textNumPatrimonio" class="col-sm-6 float-right">
                    </div>

                    <div>
                        <label for="">N° Coletor:</label>
                        <input type="text" name="textNumColetor" id="textNumColetor" class="col-sm-6 float-right">
                    </div>

                    <div>
                        <label for="">Lacre:</label>
                        <input type="text" name="textLacre" id="textLacre" class="col-sm-6 float-right">
                    </div>

                    <div>
                        <label for="">Boot Code:</label>
                        <input type="text" name="textBootCode" id="textBootCode" class="col-sm-6 float-right">
                    </div>

                    <div>
                        <label for="">OS Code:</label>
                        <input type="text" name="textOsCode" id="textOsCode" class="col-sm-6 float-right">
                    </div>
                    <div>
                        <label for="">Observação:</label>
                        <input type="text" name="textObservacao" id="textObservacao" class="col-sm-8 float-right">
                    </div>
                    <span class="p">Últma edição realizada em: 2020-02-2020 por: Phelype Rodrigo dos Santos</span>
                    <div>
                        <button type="button" id="btn_Imprime_historico">Imprimir Histórico</button>
                        <button type="button" id="btn_Editar">Editar</button>
                        <button type="button" id="btn_Cancelar">Cancelar</button>
                        <button type="button" id="btn_Nova_Ordem">Nova Orderm Serviço</button>
                        <button type="button" id="btn_historico">Histórico</button>
                        <button type="button" id="btn_Sair">Sair</button>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div id="StatusColetor">
                        <fieldset class="fieldset1 border">
                            <legend class="legend">Status Coletor</legend>
                            <div id="fildSetStatusColetor">
                                <label for="">Status</label>
                                <select name="cmbStatusColetor" id="cmbStatusColetor" class="col-sm-12">
                                    <option value=""></option>
                                </select>
                            </div>
                            <span id="spanStatus">Ativo</span>
                        </fieldset>
                    </div>

                    <div id="fildsetChip">
                        <fieldset class="fieldset1 border">
                            <legend class="legend">Chip GPRS</legend>
                            <div>
                                <label for="">IccID:</label>
                                <input type="text" name="textIccid" id="textIccid" class="col-sm-12">
                            </div>
                            <div>
                                <label for="">Número:</label>
                                <input type="text" name="txtNumero" id="txtNumero" class="col-sm-12">
                            </div>
                            <div>
                                <label for="">Operadora</label>
                                <select name="cbmOperadora" id="cbmOperadora" class="col-sm-12">
                                    <option value=""></option>
                                </select>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>