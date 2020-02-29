
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equipo</title>
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--FONTAWESOME-->
    <script src="https://kit.fontawesome.com/35ffb07adf.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilo-fondo.css">
    <link rel="stylesheet" href="css/club.css">

    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">


   
</head>

 
<body background="img/dd1.png">
<?php
require_once "navbar.php";
?>
<header id="header">
<div class="container-fluid">
        <div class="row encabezaLogo">
            <a href="index.php">
            <div > <img src="img/elclub_header_nuevo.jpg" style="width: 100%;" alt="imagen"></div>
          </a>
        </div>
      </div>
</header>



<div class="container-fluid">

<div class="row">
    <div class="col-2 d-none d-lg-block">
        <div class="menu-lateral">
            <div class="titulo">
                <a href="" style="text-decoration: none; color:rgb(202, 2, 2);">EL CLUB</a>
                
            </div>
            <hr class="separador">
            <div class="elementos">
            
               
                <br>
                <a href="#" class="elm" id="op1" onclick="cambiaColor(1)">Nuestros Orígenes</a>
                <br>
                <br>
                <a href="#" class="elm" id="op2" onclick="cambiaColor(2)">Comisión Directiva</a>
                <br>
                <br>
                <a href="#" class="elm" id="op3" onclick="cambiaColor(3)">Nuestros Primeros Jugadores</a>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
        <div id="el-club" class="row">
            <div class ="nuestros-origenes col-lg-5 col-md-5 col-sm-12 col-xs-12" >
                <a href="#" onclick="cambiaColor(1)"><div id="seccion-orig"><h4>NUESTROS ORÍGENES</h4><p>Conocé la historia del club y sus orígenes</p></div></a>
           
            </div>
            <div class ="comision-directiva col-lg-5 col-md-5 col-sm-12 col-xs-12" >
            <a href="#" onclick="cambiaColor(2)"><div id="comision-directiva"><h4>COMISIÓN DIRECTIVA</h4><p>Conocé toda la comisión directiva del club</p></div></a>
            </div>
            <div class ="primeros-jugadores col-lg-10 col-md-10 col-sm-12 col-xs-12" >
                <a href="#" onclick="cambiaColor(3)"><div id="primeros-jugadores"><h4>PRIMEROS JUGADORES</h4><p>Conocé la historia de nuestros primeros jugadores</p></div></a>
           
            </div>
        </div>
       
        
            
        

        <div id="ori" hidden>
        <br>
            <h3 style="text-align: center; font-family: 'Anton', sans-serif; font-size: 60px">Orígenes</h3>
            <br>
            <p style="text-align: center">Se suma a la vida deportiva local el Club Sportivo Avellaneda el 30 de mayo de 1940. Por ser bastante nuevo si se quiere, no es impedimento para que haya cumplido, en el lapso de ocho décadas, actividades intensas que conquistarán de inmediato grandes simpatías entre los aficionados y desde luego en toda la extensa barriada donde surgió. <br>
                    Un grupo de muchachos de barrio se reunió para ir formando un equipo de fútbol que los representara en los torneos locales. Esto se remonta al año 1938 y la esquina de Belgrano y Brown era el centro de reuniones donde se iban tejiendo sueños de ilusión.
                    Se forma un grupo animoso dispuesto a salir a la palestra, desafiando a todos los obstáculos que podrían hallarse, y capeando el temporal nace "Once Cañoneros". Se presentan en torneos de barrios haciendo su debut con esta formación: Kissner, Da Gracia y Rincón, Priotto, Carranza y Ainza; Rossi, Toselli, Moyano, Pérez y Reynoso.
                     <br> Dos años después, un co­merciante de la zona, don Carlos Druvetta, nervio y motor del nacimiento del club, propone cambiar por "Avellaneda" a ese llamado "Once Cañoneros" y la
                    propuesta prospera ampliamente con la aprobación total de los integrantes del grupo. El nombre se deriva de la calle Avellaneda, pues en esa arteria se inician la mayoría de las prúneras reuniones.</p>
                    <br>
                    <div id="imagen-s-o" >
                    <img id="img-o" src="img/fuera-club.jpg" alt="">
                    </div>
        </div>
        <div id="comision" hidden>
            <br>
            <h3 style="text-align: center; font-family: 'Anton', sans-serif; font-size: 60px">Comision Directiva</h3>
            <br>
            <p style="text-align: center">La comisión fundadora, verdadero puntal de la entidad, se formaba de la siguiente manera: <br><br>-Presidente: Carlos Druvetta <br>-Vicepresidente: Enrique Corán <br>-Secretario: Lirio Rossi <br>-Prosecretario: Héctor O 'Duyer <br>-Tesorero: Domingo Manzi <br>-Protesorero: Felipe Toselli <br>-Vocales: Néstor Boscone,
            Eduardo Villa, Jorge Salinas <br>-Revisadores de cuentas: Felipe Gracia,José Dell Óspedalle</p>
            <br>
            <div id="imagen-s-o">
              <img id="img-c" src="img/primer-presidente.jpg" alt="">  
            </div>
        </div>
        <div id="jugadores" hidden>
            <h3>Jugadores</h3>
        </div>
        
    </div>
</div>
</div>



<!--FOOTER-->
<?php require_once "footer.php" ?>


<!--SCRIPT NAVBAR-->
<script>
  window.onscroll = function () { myFunction() };

function myFunction() {
if (document.body.scrollTop > 142 || document.documentElement.scrollTop > 142) {
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


function cambiaColor(opcion){
    
    switch(opcion){
        case 1:
            
            $('#op1').css("color", "red");
            $('#op1').css("font-weight", "bold");
            $('#op2').css("color", "black");
            $('#op2').css("font-weight", "normal");
            $('#op3').css("color", "black");
            $('#op3').css("font-weight", "normal");
            //Mostramos el div correspondiente
            $('#ori').prop("hidden",false);
            $('#comision').prop("hidden",true);
            $('#jugadores').prop("hidden",true);
            $('#el-club').prop("hidden",true)

            break;
        case 2:
            $('#op1').css("color", "black");
            $('#op1').css("font-weight", "normal"); 
            $('#op3').css("font-weight", "normal");
            $('#op3').css("color", "black");
            $('#op3').css("font-weight", "normal");
            $('#op2').css("color", "red");
            $('#op2').css("font-weight", "bold");
             //Mostramos el div correspondiente
             $('#comision').prop("hidden",false);
             $('#ori').prop("hidden",true);
             $('#jugadores').prop("hidden",true);
             $('#el-club').prop("hidden",true)
        break;
        case 3:
            $('#op1').css("color", "black");
            $('#op1').css("font-weight", "normal");
            $('#op2').css("color", "black");
            $('#op2').css("font-weight", "normal");
            $('#op3').css("color", "red");
            $('#op3').css("font-weight", "bold");
             //Mostramos el div correspondiente
             $('#jugadores').prop("hidden",false);
             $('#comision').prop("hidden",true);
             $('#ori').prop("hidden",true);
             $('#el-club').prop("hidden",true)
        break;
    }

    $('#ori').show('slow');

}
 
</script>
</body>
</html>