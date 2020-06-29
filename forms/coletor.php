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

</div>