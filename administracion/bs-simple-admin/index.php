﻿<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: ../index.php");
}

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Panel de Administración</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <script src="https://kit.fontawesome.com/35ffb07adf.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--LIBRERIA JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--PLUGIN VALIDACION-->
    <script src="assets/js/jquery-validate-plugin.js"></script>


    <script>
        $(document).ready(function() {
            $("#registro").click(function() {
                $("#msj_bienvenido").hide()
                var url = $(this).attr("href");
                $("#contenido").load(url);
                return false;
            });

           

        })
    </script>


</head>

<body>



    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />

                    </a>

                </div>

                <span class="logout-spn">
                    <a href="cierre.php" style="color:#fff;">Salir</a>

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">



                    <li class="active-link">
                        <a href="index.php"><i class="fa fa-desktop "></i>Inicio<span class="badge"></span></a>
                    </li>


                    <li>
                        <a href="registro_jugador.html" id="registro"><i class="fa fa-user-plus"></i>Registrar Jugador<span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-user"></i>Modificar Jugador<span class="badge"></span></a>
                    </li>


                    <li>
                        <a href="#"><i class="fas fa-user-times"></i>Eliminar Jugador</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-futbol"></i>Cargar próximo partido</a>
                    </li>

                    <li>
                        <a href="#"><i class="far fa-newspaper"></i>Agregar nueva noticia</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-images"></i>Subir nueva foto a galería</a>
                    </li>


                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>PANEL ADMINISTRATIVO</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info" id="msj_bienvenido">
                            <strong>Bienvenido <?php echo $_SESSION['user']; ?> ! </strong>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row text-center pad-top">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div id="contenido" style="padding-left: 80%">

                        </div>


                    </div>

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <div class="footer">


            <div class="row">
                <div class="col-lg-12">
                    &copy; 2020 | Desarrollado por : Siste[+] </a>
                </div>
            </div>
        </div>


        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>



</body>

</html>