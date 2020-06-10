<?php
require_once('../imports_stilos/imports_stiles.php');
?>
<script>
    //chamada responsavel pela leitura da pagina. retira-lo impedira que o script funcione
    $(document).ready(function() {

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
<div class="container">
    <div class="shadow-lg mb-5 p-5 rounded border">
        <div class="col-sm-12">
            <form id="">
                <div class="row">

                    <div class="form-group">
                        <select name="cbmEstado" id="cbmEstado" class="form-control form-control-sm">
                            <option selected>Estado</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-2">
                        <select name="cbmRegiao" id="cbmRegiao" class="form-control form-control-sm">
                            <option selected>Região</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-3">
                        <select name="cbmCidade" id="cbmCidade" class="form-control form-control-sm">
                            <option selected>Cidade</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-2">
                        <select name="cbmDepartamento" id="cbmDepartamento" class="form-control form-control-sm">
                            <option selected>Departamento</option>
                        </select>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <input type="text" name="textBusca" id="textBusca" placeholder="00000" class="form-control form-control-sm">
                    </div>
                    <div>
                        <button type="button" class="btn btn-sm btn-primary">buscar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-sm-7">
                <table class="table tabela">
                    <thead>
                        <tr class="tr-tamanhos">
                            <th>Departamento</th>
                            <th>N° Coletor</th>
                            <th>N° Serial/IMEI</th>
                            <th>Patrimônio</th>
                            <th>Modelo</th>
                            <th>MicroSD</th>
                            <th>Status</th>
                            <th>Emprestado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr-corpo-tabela">
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>

                </table>
                <p>Qtde total</p>
            </div>
            <div class="col-sm-5 border">
                <form id="">
                    <div class="row">
                        <div class="col-sm-6 border">
                            <div class="form-group">
                                <input type="text" name="textCodColetor" id="textCodColetor" class="form-control form-control-sm" placeholder="cód coletor">
                            </div>
                            <div class="form-group">
                                <select name="cbmMarca" id="cbmMarca" class="form-control form-control-sm">
                                    <option selected>Marca</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="cbmModelo" id="cbmModelo" class="form-control form-control-sm">
                                    <option selected>Modelo</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" name="textDataCompra" id="textDataCompra" class="form-control form-control-sm" placeholder="Data Compra">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textDataSucata" id="textDataSucata" class="form-control form-control-sm" placeholder="Data Sucata">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textDataEmprestimo" id="textDataEmprestimo" class="form-control form-control-sm" placeholder="Data Emprestimo">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textColReserva" id="textColReserva" class="form-control form-control-sm" placeholder="Col Resersa">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textNSerie" id="textNSerie" class="form-control form-control-sm" placeholder="N° Série">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textSerialMlb" id="textSerialMlb" class="form-control form-control-sm" placeholder="Serial MLB">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textNdaBateria" id="textNdaBateria" class="form-control form-control-sm" placeholder="N° da Bateria">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textNPatrimonio" id="textNPatrimonio" class="form-control form-control-sm" placeholder="N° Patrimônio">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textNdoColetor" id="textNdoColetor" class="form-control form-control-sm" placeholder="N° do Coletor">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textLacre" id="textLacre" class="form-control form-control-sm" placeholder="N° do Lacre">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textBootCode" id="textBootCode" class="form-control form-control-sm" placeholder="Boot code">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textOsCode" id="textOsCode" class="form-control form-control-sm" placeholder="Os code">
                            </div>

                            <div class="form-group">
                                <input type="text" name="textObservacao" id="textObservacao" class="form-control form-control-sm" placeholder="Observação">
                            </div>
                        </div>
                        <div class="col-sm-6 border">
                            <Fieldset class="fieldset">
                                <legend>Teste</legend>
                            </Fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>