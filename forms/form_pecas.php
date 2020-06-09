<?
    require_once('../imports_stilos/imports_stiles.php');
?>
<div class="container">

    <div class="shadow-lg mb-5 p-3 rounded border">

        <div class="col-12">
            <p class="titulo_paginas">Cadastro de Peças</p>
            <hr>
        </div>

        <div class="col-sm-12">

            <form>

                <div class="row">

                    <div class="form-group col">
                        <label for="cbmEquipamento">Equipamento:</label>
                        <select name="cbmEquipamento" id="cbmEquipamento" class="form-control form-control-sm">
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                        </select>
                    </div>

                    <div class="form-group col">
                        <label for="cbmModelo">Modelo:</label>
                        <select name="cbmModelo" id="cbmModelo" class="form-control form-control-sm">
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                        </select>
                    </div>

                    <div class="form-group col">
                        <label for="cbmStatus">Status:</label>
                        <select name="cbmStatus" id="cbmStatus" class="form-control form-control-sm">
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                            <option value="">Teste</option>
                        </select>
                    </div>

                    <div class="form-group col">
                        <label for="textQtde">Qtde:</label>
                        <input type="number" name="textQtde" id="textQtde" class="form-control form-control-sm">
                    </div>

                    <div class="form-group col">
                        <label for="textValorUnitario">Valor Unitário:</label>
                        <input type="money" name="textValorUnitario" id="textValorUnitario" class="form-control form-control-sm">
                    </div>

                    <div class="form-group col-12">
                        <label for="textDescricao">Descrição:</label>
                        <textarea name="textDescricao" id="textDescricao" cols="30" rows="1" class="form-control"></textarea>
                    </div>
                    
                    <div class="form-group col">
                        <button class="btn btn-sm btn-success">Cadastrar</button>
                        <button class="btn btn-sm btn-success">Sair</button>

                    </div>

                </div>

            </form>
            <hr>
            <p>Lista Peças</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Código</th>
                        <th scope="col">Equipamento</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Custo</th>
                        <th scope="col">Status</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>


        </div>
    </div>
</div>