<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SportivoAvellaneda</title>
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="css/estilos.css">
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>

<body style="height:1500px">

    <!--HEADER-->

    <header>
          <div class="row partidos m-auto">
                <p class="leyenda"><strong style="color:red;">próximo partido </strong>| liga venadense <strong>| 30/11/2019 | 17:00 hs | </strong> visitante </p>

               &nbsp;&nbsp;&nbsp;&nbsp;
                <p style="padding-top:4px;"><img src="img/IMG_EscuEquipos/CSDChapuy.png" style="width: 16%;" alt=""></p>
         </div>

         <div class="container-fluid">
               <div class="row encabezaLogo">
                    <a href="#">
                        <p> <img src="img/header1.jpg" style="width: 100%;" alt="imagen"></p>
                    </a>
               </div>
         </div>
    </header>

    <!--NAVEGACIÓN-->

    <nav class="navbar sticky-top navbar-expand-sm navbar-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="d-none" id="escudo">
                  <!--<p class="texto-borde"><strong>ClubSportivo</strong>Avellaneda-->
                  <a href="#"><img src="img/escudo.png" width="40" height="40"
                          class="d-inline-block align-top"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">NOTICIAS</a>
                   <ul class="submenu m-auto">
                    <li><a href="">NOTICIAS 1</a></li>
                    <li><a href="">NOTICIAS 2</a></li>
                    <li><a href="">NOTICIAS 3</a></li>
                   </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FÚTBOL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">FOTOS</a>
                    <ul class="submenu">
                        <li><a href="">FOTOS 1</a></li>
                        <li><a href="">FOTOS 2</a></li>
                        <li><a href="">FOTOS 3</a></li>
                       </ul>
                </li>
            </ul>
        </div>
    </nav>

<?php require_once "carousel.php" ?>

    <div class="container">
      <div class="container-noticias">
        asdasdasgfagg
      </div>
    </div>

    <!--BOOTSTRAP JAVASCRIPT-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!--SCRIPT NAVBAR-->
    <script>
      window.onscroll = function () { myFunction() };

function myFunction() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        document.getElementById("escudo").className = "";
        var x = document.getElementsByClassName("nav-item");
        var i;
        for (i = 0; i < x.length; i++) {
            x[i].classList.add('animacion');
        }

    } else {
        document.getElementById("escudo").className = "d-none";
        var x = document.getElementsByClassName("nav-item");
        var i;
        for (i = 0; i < x.length; i++) {
            x[i].classList.remove('animacion');
        }
    }
}
    </script>
</body>
</html>
