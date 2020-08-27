<?php
require_once('../imports_stilos/imports_stiles.php');
require_once('../controllers/novaOsController.php');
?>
<script>
    $(document).ready(function() {
        $('#btn_sair').click(function() {
            var opcao = confirm("Ei, você clicou em sair! tem certeza que deseja sair ?");
            if (opcao == true) {
                window.close();
            }

        });
    });
</script>
<div class="shadow-lg mb-5 p-3 rounded border">
    <form id="historico-form">
        <div class="form-row">
            <div class="col-sm-7 ">
                <div class="form-row">
                    <div class="form-group col-sm-2">
                        <label for="">Código</label>
                        <input type="text" name="" id="" class="form-control form-control-sm">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="">Registro</label>
                        <input type="text" name="" id="" class="form-control form-control-sm">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="">Coletor</label>
                        <input type="text" name="" id="" class="form-control form-control-sm">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="">Lacre</label>
                        <input type="text" name="" id="" class="form-control form-control-sm">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="">Estado</label>
                        <select type="text" name="" id="" class="form-control form-control-sm">
                            <option value="">GO</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="">Cidade:</label>
                        <select type="text" name="" id="" class="form-control form-control-sm">
                            <option value="">Cidade</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="">Departamento</label>
                        <select type="text" name="" id="" class="form-control form-control-sm">
                            <option value="">Departamento</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="">Emprestada:</label>
                        <input type="text" name="" id="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-10">
                        <label for="">Ocorrências</label>
                        <textarea name="" id="" rows="2" class="form-control form-control-sm">
                        </textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-10">
                        <label for="">Resolução</label>
                        <textarea name="" id="" rows="2" class="form-control form-control-sm">
                        </textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-2">
                        <label for="">Mat. Responsável</label>
                        <input type="text" name="" id="" class="form-control form-control-sm">
                    </div>
                    <div class="col-auto my-4">
                        <div class="form-checkbox col">
                            <input type="checkbox" name="" id="" class="form-check-input">
                            <label for="" class="form-check-label">Funcionário advertido</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="">Nome do Responsável</label>
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">Responsável</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="">Tec. Responsável</label>
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="">Tec. Responsável</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <fieldset class="border">
                            <legend class="legend">Ultima edição realizada por:</legend>
                            <input type="text" name="" id="" class="form-control form-control-sm">
                            <span>no dia</span>
                            <span>27/08/2020</span>

                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-3">
                        <label for="">Data Ocorrido</label>
                        <input type="date" name="" id="" class="form-control form-control-sm">
                    </div>
                    <div class="form-group col-3">
                        <label for="">Cod. Recebimento</label>
                        <input type="text" name="" id="" class="form-control form-control-sm">
                    </div>
                    <div class="form-group my-4">
                        <a href=""><img src="../imagens/logo-correios.png" alt="" width="45"></a>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-3">
                        <label for="">Data Devolução</label>
                        <input type="date" name="" id="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-3">
                        <label for="">Data Postagem</label>
                        <input type="date" name="" id="" class="form-control form-control-sm">
                    </div>
                    <div class="form-group col-3">
                        <label for="">Cod. Rastreamento</label>
                        <input type="text" name="" id="" class="form-control form-control-sm">
                    </div>
                    <div class="form-group my-4">
                        <a href=""><img src="../imagens/logo-correios.png" alt="" width="45"></a>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-8">
                        <fieldset class="border">
                            <legend class="legend">Assistência Técnica</legend>
                            <div class="form-group col-sm-5">
                                <label for="">Data Despacho</label>
                                <input type="date" name="" id="" class="form-control form-control-sm">
                            </div>
                            <div class="form-group col-sm-5">
                                <label for="">Data Serviço</label>
                                <input type="date" name="" id="" class="form-control form-control-sm">
                            </div>
                            <div class="form-group col-sm-5">
                                <label for="">Data Fechamento</label>
                                <input type="date" name="" id="" class="form-control form-control-sm">
                            </div>
                            <div class="form-group col-sm-5">
                                <label for="">Data Retorno</label>
                                <input type="date" name="" id="" class="form-control form-control-sm">
                            </div>
                            <div class="form-group col-6">
                                <label for="">Téc SUT</label>
                                <input type="text" name="" id="" class="form-control form-control-sm">
                            </div>
                            <div class="form-group col-4">
                                <label for="">N° da O.S</label>
                                <input type="text" name="" id="" class="form-control form-control-sm">
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm-4">
                        <fieldset class="border">
                            <legend class="legend">Tipo Registro</legend>
                            <div class="form-check">
                                <label class="form-check-label col">
                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                    Reparo
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label col">
                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                    Outros
                                </label>
                            </div>
                            <br>
                        </fieldset>
                        <fieldset class="border">
                            <legend class="legend">Status</legend>
                            <div class="form-check">
                                <label class="form-check-label col">
                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                    Aberto
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label col">
                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                    Fechado
                                </label>
                            </div>
                            <br>
                        </fieldset>
                        <div class="form-row">
                            <div class="form-check">
                                <label class="form-check-label col">
                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                    Possui imagem
                                </label>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-row">
                    <label for="">Historico</label>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Cidade:</th>
                                <th scope="col">Data:</th>
                                <th scope="col">Tipo Reg.:</th>
                                <th scope="col">Status.:</th>
                                <th scope="col">Departamento.:</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <div class="form-row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Peças:</th>
                                <th scope="col">Qtde.:</th>
                                <th scope="col">Custo.:</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-2">
                        <label for="">Valor total reparo</label>
                        <input type="text" name="" id="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-button">
                        <button type="button" class="btn btn-sm btn-outline-primary">Salvar</button>
                    </div>
                    <div class="form-button col">
                        <button type="button" id="btn_sair" class="btn btn-sm btn-outline-primary">Sair</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>