<?php
require_once('../imports_stilos/imports_stiles.php');
//include_once('../controllers/coletorController.php');
require_once('../controllers/coletorController.php')
?>
<script>
  $(document).ready(function() {
    $("#cod_numero").mask("(00)00000-0000");
    var cores = "<?echo$sts_codigo?>";
    if (cores == "Ativo") {
      $('#status_cor').css({
        'color': 'green'
      });
    }
    if (cores == "Inativo") {
      $('#status_cor').css({
        'color': 'crimson'
      });
    }
    if (cores == "Almoxarifado") {
      $('#status_cor').css({
        'color': 'blue'
      });
    }
    if (cores == "Sucata") {
      $('#status_cor').css({
        'color': 'red'
      });
    }
    if (cores == "Manutenção") {
      $('#status_cor').css({
        'color': 'sienna'
      });
    }
    if (cores == "Transferido") {
      $('#status_cor').css({
        'color': 'cyan'
      });
    }
    if (cores == "Emprestado") {
      $('#status_cor').css({
        'color': 'magenta'
      });
    }
    if (cores == "Perda") {
      $('#status_cor').css({
        'color': 'violet'
      });
    }
    if (cores == "Roubo/Furto") {
      $('#status_cor').css({
        'color': 'darkolchild'
      });
    }
    if (cores == "Vendido") {
      $('#status_cor').css({
        'color': 'darkslategray'
      });
    }
    if (cores == "Outros") {
      $('#status_cor').css({
        'color': 'purple'
      });
    }

    //Pagina inicializa e todos os itens devem estar desabilitados.
    $('#marca_coletor').attr('disabled', true);
    $('#cod_modelo').attr('disabled', true);
    $('#dataCompra').attr('disabled', true);
    $('#dataSucata').attr('disabled', true);
    $('#dataEmprestimo').attr('disabled', true);
    $('#cod_marca').attr('disabled', true);
    $('#cod_reserva').attr('disabled', true);
    $('#cod_serie').attr('disabled', true);
    $('#cod_serial').attr('disabled', true);
    $('#cod_bateria').attr('disabled', true);
    $('#cod_patrimonio').attr('disabled', true);
    $('#numero_coletor').attr('disabled', true);
    $('#cod_boot').attr('disabled', true);
    $('#cod_lacre').attr('disabled', true);
    $('#cod_os').attr('disabled', true);
    $('#cod_observacao').attr('disabled', true);
    $('#cbm_status').hide();
    $('#status_cor').show();

    ///A partir daqui será para controlar os botões
    $('#btn_editar').click(function() {
      $('#marca_coletor').attr('disabled', false);
      $('#cod_modelo').attr('disabled', false);
      $('#dataCompra').attr('disabled', true);
      $('#dataSucata').attr('disabled', false);
      $('#dataEmprestimo').attr('disabled', false);
      //('#cod_marca').attr('disabled', true);
      $('#cod_reserva').attr('disabled', false);
      $('#cod_serie').attr('disabled', true);
      $('#cod_serial').attr('disabled', true);
      $('#cod_bateria').attr('disabled', false);
      $('#cod_patrimonio').attr('disabled', true);
      $('#numero_coletor').attr('disabled', false);
      $('#cod_boot').attr('disabled', false);
      $('#cod_lacre').attr('disabled', false);
      $('#cod_os').attr('disabled', false);
      $('#cod_observacao').attr('disabled', false);
      $('#cbm_status').show();
      $('#status_cor').hide();
    });

    $('#btn_cancelar').click(function() {
      $('#marca_coletor').attr('disabled', true);
      $('#cod_modelo').attr('disabled', true);
      $('#dataCompra').attr('disabled', true);
      $('#dataSucata').attr('disabled', true);
      $('#dataEmprestimo').attr('disabled', true);
      $('#cod_marca').attr('disabled', true);
      $('#cod_reserva').attr('disabled', true);
      $('#cod_serie').attr('disabled', true);
      $('#cod_serial').attr('disabled', true);
      $('#cod_bateria').attr('disabled', true);
      $('#cod_patrimonio').attr('disabled', true);
      $('#numero_coletor').attr('disabled', true);
      $('#cod_boot').attr('disabled', true);
      $('#cod_lacre').attr('disabled', true);
      $('#cod_os').attr('disabled', true);
      $('#cod_observacao').attr('disabled', true);
      $('#cbm_status').hide();
      $('#status_cor').show();
    });

  });
</script>
<div class="container">

  <div class="shadow-lg mb-5 p-3 rounded border" id="dados-coletor">
    <div class="row">

      <div class="col-sm-8">

        <form id="form">

          <div class="form-group">
            <label for="cod_coletor">Cod. Coletor</label>
            <input type="text" name="cod_coletor" id="cod_coletor" class="col-sm-1 form-control form-control-sm" value="<?echo$col_coletor?>" readonly>
          </div>

          <div class="form-row">
            <div class="form-group col">
              <label for="cod_marca">Marca:</label>
              <select type="text" name="marca_coletor" id="marca_coletor" class=" form-control form-control-sm">
                <option>
                  <?echo$marca?>
                </option>
                <?$Obj = new DB();
                $link = $Obj->connecta_mysql();
                $query_marca = "select * from marca_coletor";
                $result = mysqli_query($link, $query_marca);
                if ($result) {
                  while ($registros = mysqli_fetch_array($result)) {
                  echo'<option value="'.$registros['mcc_codigo'].'">'.$registros['marca'].'</option>';
                }
                } else {
                echo "Atenção ! não existe";
              }?>
              </select>
            </div>

            <div class="form-group col">
              <label for="cod_modelo">Modelo:</label>
              <select type="text" name="cod_modelo" id="cod_modelo" class="form-control form-control-sm">
                <option value="">
                  <?echo$mdc_modelo?>
                </option>
                <?$Obj = new DB();
                $link = $Obj->connecta_mysql();
                $query_marca = "select * from modelo_coletor";
                $result = mysqli_query($link, $query_marca);
                if ($result) {
                  while ($registros = mysqli_fetch_array($result)) {
                  echo'<option value="'.$registros['mdc_codigo'].'">'.$registros['mdc_modelo'].'</option>';
                }
                } else {
                echo "Atenção ! não existe";
              }?>
              </select>
            </div>

            <div class="form-group col">
              <label for="dataCompra">Data Compra:</label>
              <input type="text" name="dataCompra" id="dataCompra" class="form-control form-control-sm" value="<?echo$data_compra?>">
            </div>

            <div class="form-group col">
              <label for="dataSucata">Data Sucatia:</label>
              <input type="text" name="dataSucata" id="dataSucata" class="form-control form-control-sm" value="<?echo$data_sucateamento?>">
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col">
              <label for="dataEmprestimo">Data Emprestimo:</label>
              <input type="text" name="dataEmprestimo" id="dataEmprestimo" class="form-control form-control-sm" value="<?echo$data_emprestimo?>">
            </div>

            <div class="form-group col">
              <label for="cod_reserva">Col Reserva:</label>
              <input type="text" name="cod_reserva" id="cod_reserva" class="form-control form-control-sm" value="<?echo$no_lugar_da ?>">
            </div>

            <div class="form-group col">
              <label for="cod_serie">N° Série:</label>
              <input type="text" name="cod_serie" id="cod_serie" class="form-control form-control-sm" value="<?echo$serial?>">
            </div>

            <div class="form-group col">
              <label for="cod_serial">Serial MLB:</label>
              <input type="text" name="cod_serial" id="cod_serial" class="form-control form-control-sm" value="<?echo$mlb_serial?>">
            </div>

          </div>

          <div class="form-row">

            <div class="form-group col">
              <label for="cod_bateria">N°da Bateria:</label>
              <input type="text" name="cod_bateria" id="cod_bateria" class="form-control form-control-sm" value="<?echo$bateria?>">
            </div>

            <div class="form-group col">
              <label for="cod_patrimonio">N° do Patrimônio:</label>
              <input type="text" name="cod_patrimonio" id="cod_patrimonio" class="form-control form-control-sm" value="<?echo$patrimonio?>">
            </div>

            <div class="form-group col">
              <label for="numero_coletor">N° do Coletor:</label>
              <input type="text" name="numero_coletor" id="numero_coletor" class="form-control form-control-sm" value="<?echo$numero_coletor?>">
            </div>

            <div class="form-group col">
              <label for="cod_lacre">Lacre:</label>
              <input type="text" name="cod_lacre" id="cod_lacre" class="form-control form-control-sm" value="<?echo$garantia?>">
            </div>

            <div class="form-group col">
              <label for="cod_boot">Boot code:</label>
              <input type="text" name="cod_boot" id="cod_boot" class="form-control form-control-sm" value="<?echo$boot_code?>">
            </div>

            <div class="form-group col">
              <label for="cod_os">Os code:</label>
              <input type="text" name="cod_os" id="cod_os" class="form-control form-control-sm" value="<?echo$os_code?>">
            </div>

          </div>

          <div class="form-row">

            <div class="form-group col">
              <label for="cod_observacao">Observações:</label>
              <input type="text" name="cod_observacao" id="cod_observacao" class="form-control form-control-sm" value="<?echo$observacoes?>">
            </div>

          </div>

          <div class="form-row">
            <span>Ultima edição realizada em: <span>
                <?echo$data_edicao?></span> por <span>
                <?echo$idusuario?></span></span>
          </div>

      </div>
      <div class="col-sm-4 ">
        <br>
        <div class="form-group">

          <fieldset class="fieldset1 border">
            <legend class="legend">Status</legend>
            <select name="cbm_status" id="cbm_status" class="form-control form-control-sm col-sm-8">
              <option value="">
                <?echo$sts_codigo?>
              </option>
              <?$Obj = new DB();
                $link = $Obj->connecta_mysql();
                $query_marca = "select * from cadstatus";
                $result = mysqli_query($link, $query_marca);
                if ($result) {
                  while ($registros = mysqli_fetch_array($result)) {
                  echo'<option value="'.$registros['sts_codigo'].'">'.$registros['sts_status'].'</option>';
                }
                } else {
                echo "Atenção ! não existe";
              }?>
            </select>
            <h4 id="status_cor">
              <?echo$sts_codigo?>
            </h4>
          </fieldset>
        </div>
        <br>
        <div class="form-group">
          <fieldset class="border">
            <legend class="legend">Chip GPRS</legend>

            <div class="col-sm-8">
              <label for="cod_iccid">IccID</label>
              <input type="text" name="cod_iccid" id="cod_iccid" class="form-control form-control-sm">

              <label for="cod_numero">Número</label>
              <input type="tel" class="form-control form-control-sm" name="cod_numero" id="cod_numero">
            </div>
            <br>
          </fieldset>

        </div>

      </div>
      <div class="col-sm-12 ">
        <div class="form-row">
          <div class="form-group">
            <button type="button" id="btn_imp_historico" class="btn btn-sm btn-primary">Imprimir historico</button>
            <button type="button" id="btn_editar" class="btn btn-sm btn-primary">Editar</button>
            <button type="button" id="btn_cancelar" class="btn btn-sm btn-primary">Cancelar</button>
            <button type="button" id="btn_nova_os" class="btn btn-sm btn-primary">Nova Ordem Serviço</button>
            <button type="button" id="btn_historico" class="btn btn-sm btn-primary">Histórico</button>
            <button type="button" id="btn_sair" class="btn btn-sm btn-primary">Sair</button>
          </div>
        </div>
      </div>

      </form>

    </div>
  </div>

  <div class="shadow-lg mb-5 p-3 border" id="NovaOsServico">
    <form>

      <div class="form-row col">
        <div class="form-group col-sm-1">
          <label for="">Código</label>
          <input type="text" name="" id="" class="form-control form-control-sm" value="<?echo$seuId?>">
        </div>

        <div class="form-group col-sm-1">
          <label for="">N° Registro</label>
          <input type="text" name="" id="" class="form-control form-control-sm" value="<?echo$seuId?>">
        </div>

        <div class="form-group col-sm-1">
          <label for="">N° Coletor</label>
          <input type="text" name="" id="" class="form-control form-control-sm" value="<?echo$seuId?>">
        </div>

        <div class="form-group col-sm-1">
          <label for="">Lacre</label>
          <input type="text" name="" id="" class="form-control form-control-sm" value="<?echo$seuId?>">
        </div>

        <div class="form-group col-sm-1">
          <label for="">Estado</label>
          <select type="text" name="" id="" class="form-control form-control-sm">
            <option value="">UF</option>
          </select>
        </div>

        <div class="form-group col-sm-3">
          <label for="">Cidade</label>
          <select type="text" name="" id="" class="form-control form-control-sm">
            <option value="">Cidades</option>
          </select>
        </div>

        <div class="form-group col-sm-2">
          <label for="">Departamento</label>
          <select type="text" name="" id="" class="form-control form-control-sm">
            <option value="">Departamento</option>
          </select>
        </div>

        <div class="form-group col-sm-2">
          <label for="">Emprestada</label>
          <input type="text" name="" id="" class="form-control form-control-sm">
        </div>

        <div class="form-group col-sm-12">
          <label for="">Ocorrências:</label>
          <textarea name="" id="" rows="2" class="form-control"></textarea>
        </div>

        <div class="form-group col-sm-12">
          <label for="">Resolução:</label>
          <textarea name="" id="" rows="2" class="form-control"></textarea>
        </div>

        <div class="form-group col-sm-2">
          <label for="">Mat. do Responsável:</label>
          <input type="text" name="" id="" class="form-control form-control-sm">
        </div>

        <div class="col-auto my-1">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Funcionário advertido?
            </label>
          </div>
        </div>

    </form>
  </div>

</div>