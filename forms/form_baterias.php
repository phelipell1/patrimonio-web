<?
    require_once('../imports_stilos/imports_stiles.php');
?>
<div class="container">

    <div class="shadow-lg mb-5 p-3 rounded border">

        <div class="col-12">
            <p class="titulo_paginas">Baterias</p>
            <hr>
            <p id="msg"></p>
        </div>

        <div class="col-sm-12">
            <form>
                <div class="row">

                    <div class="form-group col-1">
                        <label for="textCodigo">Código</label>
                        <input type="text" name="textCodigo" id="textCodigo" class="form-control form-control-sm" readonly>
                    </div>

                    <div class="form-group col-2">
                        <label for="cbmBateriaDe">Bateria de:</label>
                        <select name="cbmBateriaDe" id="cbmBateriaDe" class="form-control form-control-sm">
                            <option selected></option>
                            <option value="">Teste</option>
                            <option value="">Teste1</option>
                        </select>
                    </div>

                    <div class="form-group col-2">
                        <label for="cbmEstadoBateria">Estado Bateria:</label>
                        <select name="cbmEstadoBateria" id="cbmEstadoBateria" class="form-control form-control-sm">
                            <option selected></option>
                            <option value="">Teste</option>
                            <option value="">Teste1</option>
                        </select>
                    </div>

                    <div class="form-group col-2">
                        <label for="cbmCidade">Cidade:</label>
                        <select name="cbmCidade" id="cbmCidade" class="form-control form-control-sm">
                            <option selected></option>
                            <option value="">Teste</option>
                            <option value="">Teste1</option>
                        </select>
                    </div>

                    <div class="form-group col-3">
                        <label for="textDataTroca">Data Troca:</label>
                        <input type="date" name="textDataTroca" id="textDataTroca" class="form-control form-control-sm">
                    </div>

                    <div class="form-group col-2">
                        <label for="textSerialBateria">Serial da Bateria:</label>
                        <input type="text" name="textSerialBateria" id="textSerialBateria" class="form-control form-control-sm">
                    </div>

                    <div class="form-group col-2">
                        <label for="textLacreBateria">Lacre Bateria:</label>
                        <input type="text" name="textLacreBateria" id="textLacreBateria" class="form-control form-control-sm">
                    </div>

                    <div class="form-group col-2">
                        <label for="textCoddoEq">Cód. do Eq:</label>
                        <input type="text" name="textCoddoEq" id="textCoddoEq" class="form-control form-control-sm">
                    </div>

                    <div class="form-group col-2">
                        <label for="textObservacao">Observação:</label>
                        <input type="text" name="textObservacao" id="textObservacao" class="form-control form-control-sm">
                    </div>

                    <div class="form-group col-2">
                        <label for="textCycleCount">CycleCount:</label>
                        <input type="number" name="textCycleCount" id="textCycleCount" class="form-control form-control-sm">
                    </div>

                    <div class="form-group col-2">
                        <label for="cbmFornecedor">Fornecedor:</label>
                        <select name="cbmFornecedor" id="cbmFornecedor" class="form-control form-control-sm">
                            <option selected></option>
                            <option value="">Teste</option>
                            <option value="">Teste1</option>
                        </select>
                    </div>

                    <div class="form-check col-2">
                        <input class="form-check-input chekBox" type="checkbox" value="" id="checkDevolvido" name="checkDevolvido">
                        <label for="checkDevolvido" class="form-check-label chekBox">Bat. velha devolvida</label>
                    </div>

                    <div class="form-group col">
                        <button type="button" class="btn btn-sm btn-success">Incluir</button>
                        <button type="button" class="btn btn-sm btn-warning">Cancelar</button>
                        <button type="button" class="btn btn-sm btn-danger">Sair</button>
                    </div>

                </div>
            </form>
            <div class="scrollbar scrollbar-lady-lips">
            <div class="force-overflow">
            <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Equipamento</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Data</th>
                            <th scope="col">Serial</th>
                            <th scope="col">Lacre</th>
                            <th scope="col">Devolvida</th>
                            <th scope="col">Observações</th>
                            <th scope="col">Fornecedor</th>
                            <th scope="col">Bateria</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>Impressora</td>
                            <td>Goiânia</td>
                            <td>04/06/2020</td>
                            <td>PBR400</td>
                            <td>178566</td>
                            <td><input type="checkbox"></td>
                            <td>Bateria Nova</td>
                            <td>Solution</td>
                            <td>Novo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>

        </div>
        <form id="">
        <div class="row col">
            <div class="form-group col-2">
            <label for="cbmCidade">Cidade:</label>
                <select name="cbmCidade" id="cbmCidade" class="form-control form-control-sm">
                    <option selected></option>
                    <option value="">Teste</option>
                    <option value="">Teste1</option>
                </select>
                </div>
                    <div class="form-group">
                    <button class="btn btn-sm btn-primary btn-busca">buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>