<?php
require_once('../imports_stilos/imports_stiles.php');
?>
<script>
    //chamada responsavel pela leitura da pagina. retira-lo impedira que o script funcione
    $(document).ready(function(){

        //Parte responsavel por setar a configuração inicial da página.

        $('#btn_imprimir').hide();
        $('#btn_editar').hide();
        $('#btn_cancelar').hide();
        $('#btn_novaos').hide();
        $('#btn_historico').hide();
        $("#cbmMarca").attr("disabled", true);
        $("#cbmModelo").attr("disabled", true);
        $("#textDataCompra").prop("readonly", true);
        

    });
</script>
<!--<div class="container">-->
<div class="shadow-lg mb-5 p-3 rounded border">
    <div class="col-sm-12">
        <form id="">
            <div class="row">

                <div class="form-group">
                    <label for="cbmEstado">Estado:</label>
                    <select name="cbmEstado" id="cbmEstado" class="input_form">
                        <option selected>--</option>
                        <option value="">Grande demais</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cbmRegiao">Região:</label>
                    <select name="cbmRegiao" id="cbmRegiao" class="input_form">
                        <option selected>--</option>
                        <option value="">Palavra grande</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cbmCidade">Cidade:</label>
                    <select name="cbmCidade" id="cbmCidade" class="input_form cbm_cidade">
                        <option selected>--</option>
                        <option value="">Palavra grande</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cbmCidade">Departamento:</label>
                    <select name="cbmCidade" id="cbmCidade" class="input_form">
                        <option selected>--</option>
                        <option value="">Palavra grande</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" name="txtBusca" id="txtbusca" class="input_tamanho">
                    <button type="button">buscar</button>
                </div>

            </div>
        </form>

    </div>
    <div class="row">
        <div class="col-sm-7 color">
            <table class="table table-striped table-sm border">
                <thead>
                    <tr class="tr-tamanhos">
                        <th>Departamento</th>
                        <th>N° Coletor</th>
                        <th>Serial/IMEI</th>
                        <th>Patrimônio</th>
                        <th>Modelo</th>
                        <th>MicroSD</th>
                        <th>Status</th>
                        <th>Emprestado em</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="tr-corpo-tabela">
                        <th>Leitura</th>
                        <td>001</td>
                        <td>354130108210599</td>
                        <td>07575</td>
                        <td>MOTO G7 Play</td>
                        <td><input type="checkbox"></td>
                        <td>Ativo</td>
                        <td>06/06/2020</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-sm-3">
            <form id="">
                <div class="form-group">
                    <label for="textCodColetor">Código Coletor: </label>
                    <input type="text" name="textCodColetor" id="textCodColetor" class="col-sm-3 float-right" readonly>
                </div>

                <div class="form-group">
                    <label for="cbmMarca">Marca: </label>
                    <select type="text" name="cbmMarca" id="cbmMarca" class="col-sm-8 float-right" aria-readonly="true">
                        <option selected>--</option>
                        <option value="">Bixolon</option>
                        <option value="">Motorola</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cbmModelo">Modelo: </label>
                    <select type="text" name="cbmModelo" id="cbmModelo" class="col-sm-8 float-right">
                        <option selected>--</option>
                        <option value="">Modelo 1</option>
                        <option value="">Modelo 2</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="textDataCompra">Dt compra: </label>
                    <input type="text" name="textDataCompra" id="textDataCompra" class="col-sm-8 float-right" readonly>
                </div>

                <div class="form-group">
                    <label for="textDataSucata">Dt sucata: </label>
                    <input type="date" name="textDataSucata" id="textDataSucata" class="col-sm-8 float-right">
                </div>

                <div class="form-group">
                    <label for="textColReserva">Col reserva: </label>
                    <input type="text" name="textColReserva" id="textColReserva" class="col-sm-8 float-right">
                </div>

                <div class="form-group">
                    <label for="textNSerie">N° Série: </label>
                    <input type="text" name="textNSerie" id="textNSerie" class="col-sm-8 float-right">
                </div>

                <div class="form-group">
                    <label for="textSerialMLB">Serial MLB: </label>
                    <input type="text" name="textSerialMLB" id="textSerialMLB" class="col-sm-8 float-right">
                </div>

                <div class="form-group">
                    <label for="textNBateria">N° Bateria: </label>
                    <input type="text" name="textNBateria" id="textNBateria" class="col-sm-8 float-right">
                </div>

                <div class="form-group">
                    <label for="textNPatrimonio">N° patrimônio: </label>
                    <input type="text" name="textNPatrimonio" id="textNPatrimonio" class="col-sm-8 float-right">
                </div>

                <div class="form-group">
                    <label for="textNColetor">N° Coletor: </label>
                    <input type="text" name="textNColetor" id="textNColetor" class="col-sm-8 float-right">
                </div>

                <div class="form-group">
                    <label for="textLacre">Lacre: </label>
                    <input type="text" name="textLacre" id="textLacre" class=" col-sm-8 float-right">
                </div>

                <div class="form-group">
                    <label for="textBootCode">Boot code: </label>
                    <input type="text" name="textBootCode" id="textBootCode" class=" col-sm-8 float-right">
                </div>

                <div class="form-group">
                    <label for="textOsCode">OS code: </label>
                    <input type="text" name="textOsCode" id="textOsCode" class="col-sm-8  float-right">
                </div>

                <div class="form-group">
                    <label for="textobservacao">Observação </label>
                    <input type="text" name="textobservacao" id="textobservacao" class="col-sm-8 float-right">
                </div>

                <div class="form-group">
                    <button type="button" id="btn_imprimir">Imprimir</button>
                    <button type="button" id="btn_editar">Editar</button>
                    <button type="button" id="btn_cancelar">Cancelar</button>
                    <button type="button" id="btn_novaos">Nova OS</button>
                    <button type="button" id="btn_historico">Histórico</button>
                    <button type="button" id="btn_sair">Sair</button>

                </div>
        </div>

        <div class="col-sm-2">
            <div class="row">
                <fieldset class="fieldset1 border">
                    <legend>Status</legend>
                    <div class="form-group">
                        <label for="cbmStatus">Status: </label><br>
                        <select type="text" name="cbmModelo" id="cbmModelo" class="col-sm-12">
                            <option selected>--</option>
                            <option value="">Modelo 1</option>
                            <option value="">Modelo 2</option>
                        </select>
                    </div>
                </fieldset>

                <fieldset class="fieldset1 border">
                    <legend>CHIP GPRS</legend>
                    <div class="form-group">
                        <label for="textobservacao">IccID</label><br>
                        <input type="text" name="textobservacao" id="textobservacao" class="col-sm-10">
                    </div>
                    <div class="form-group">
                        <label for="textobservacao">Número</label><br>
                        <input type="text" name="textobservacao" id="textobservacao" class="col-sm-8">
                    </div>

                </fieldset>
            </div>

        </div>
    </div>
    </form>
</div>
<!--</div>-->