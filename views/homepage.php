<?php
session_start();
require_once('../Connections/Conexao.php');
$perfil_acesso = $_SESSION['userperfil'];
$rms = isset($_GET['rms']) ? $_GET['rms'] : 0;
//$data = date('A');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$data = strftime('%B', strtotime('today'));
$Obj = new DB();
$link = $Obj->connecta_mysql();
if (!isset($_SESSION['login'])) {
    header('Location: ../index.php?erro=1');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style2.css">
    <link rel="stylesheet" href="../CSS/home.css">
    <!-- Font Awesome JS -->
    <script src="../jquery/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>


    <!--Essa parte carrega as informações com base no perfil do Usuario-->
    <script>
        $(document).ready(function() {
            //Acesso segundo perfil do Usuário
            var perfil = "<? echo $perfil_acesso ?>";

            if (perfil == 'Suporte') {
            } else if (perfil == 'Administrador') {
            } else if (perfil == "Operador") {
            }

            //Ações botoes

            $('#btn_form_pecas').click(function(){
                    $.ajax({
                    url: '../forms/form_pecas.php',
                    success:function(data) {
                    $("#div_fomrs").html(data).show();
                }
                    })
            });

            $('#btn_baterias').click(function(){
                    $.ajax({
                    url: '../forms/form_baterias.php',
                    success:function(data) {
                    $("#div_fomrs").html(data).show();
                }
                })
            });

            /*$('#btn_coletor').click(function(){
                    $.ajax({
                    url: '../forms/coletor.php',
                    success:function(data) {
                    $("#div_fomrs").html(data).show();
                }
                })
            });*/

        });
    </script>
    <!--Script para mascara de input-->
    <script>
        $(document).ready(function() {
            /*$('#txtCep').mask('99999-999');*/
        });

        
    </script>
    
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
            </div>
            <div class="img-user">
                <?
                if ($_SESSION['imagem'] == NULL || $_SESSION['imagem'] == "404 Default") {
                    echo '<span class="span"><img class="span" src="../imagens/user.png" width="60"></span>';
                } else {
                    echo '<span class="span"><img class="span" src="' . $_SESSION['imagem'] . '" width="30"></span>';
                }
                ?>
            </div>
            <div>
                <p class="col"><span class="sp-nome"><? echo $_SESSION['username'] ?></span></p>
                <p class="col tx"><span class="tx"><? echo $_SESSION['userperfil'] ?></span></p>
            </div>
            <hr>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="../views/homepage.php"><img src="../imagens/home.png" width="30" alt=""><span class="config-span"> Home</span></a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><img src="../imagens/ticket.png" width="30" alt=""><span  class="config-span">Cadastros</span></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li id="btn_form_pecas">
                            <a href="#">Peças</a>
                        </li>
                        <li id="btnDestinatarios">
                            <a href="#">Técnicos</a>
                        </li>
                        <li id="btnDestinatarios">
                            <a href="#">Outros</a>
                        </li>
                        <li id="btnEmpresas">
                            <a href="#">Coletores</a>
                        </li>
                        <li id="btnRemetente">
                            <a href="#">Impressoras</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="../views/homepage.php"><img src="../imagens/computer.png" width="30" alt=""><span class="config-span">Computadores</span></a>
                </li>
                <li class="active" id="btn_coletor">
                    <a href="../forms/coletor.php"><img src="../imagens/mobile.png" width="30" alt=""><span class="config-span">Coletor</span></a>
                </li>
                <li class="active">
                    <a href="../forms/impressora.php"><img src="../imagens/printer.png" width="30" alt=""><span class="config-span">Impressoras</span></a>
                </li>
                <li class="active" id="btn_baterias">
                    <a href="#"><img src="../imagens/battery.png" width="30" alt=""><span class="config-span">Baterias</span></a>
                </li>
                <li class="active">
                    <a href="../views/homepage.php"><img src="../imagens/lupa.png" width="30" alt=""><span  class="config-span">Relações</span></a>
                </li>
                <li class="active">
                    <a href="../views/logout.php"><img src="../imagens/logout.png" width="30" alt=""><span  class="config-span">Logout</span></a>
                </li>
            </ul>
            <div class="row">
                <div class="col-sm-12">
                    <a class="float-lefts" href="../config/configuracoes.php"><img src="../imagens/conf.png" width="20" alt=""></a>
                <p class="align-top"> Versão 1.0.10</p>

                </div>
            </div>
        </nav>
        <!-- Page Content  -->
        <div id="content">

            <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <span>Dashboard</span>
                        </ul>
                    </div>
                </div>

            </nav>-->

            <div id="div_fomrs" class="col">

        </div>
    </div>
    </div>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'true');
            });
        });
    </script>
</body>
</html>