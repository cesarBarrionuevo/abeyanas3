
        $(function(){
          $("body").hide().fadeIn(2000);
      })
    
     
  $(document).ready(function () {
    
 
    
  
    //FUNCIÓN PARA CAMBIAR IMAGEN EN NAVBAR
    $("#imagen-cambiante-masculino").hide();
    

    //MASCULINO Y FEMENINO
    $("#f-mas").mouseover(function (e) {
      $("#foto").attr("src","img/av3.jpeg");
      $("#imagen-cambiante-masculino div p").html("<p>Conocé los integrantes de nuestros equipos de fútbol masculino</p>");
      $("#imagen-cambiante-masculino").stop().fadeIn(350);
      e.stopPropagation();
    });
    $("#f-mas").mouseout(function (ev) {
      $("#imagen-cambiante-masculino").stop().fadeOut(350);
     
      ev.stopPropagation();
    });
    $("#f-fem").mouseover(function () {
      $("#foto").attr("src","img/dd1.png");
      $("#imagen-cambiante-masculino div p").html("<p>Conocé las integrantes de nuestros equipos de fútbol femenino</p>");
      $("#imagen-cambiante-masculino").stop().fadeIn(350);
    });
    $("#f-fem").mouseout(function () {
      $("#imagen-cambiante-masculino").stop().fadeOut(350);
    });

    //PRIMERA Y RESERVA
    $("#primera").mouseover(function (e) {
      $("#foto").attr("src","img/av3.jpeg");
      $("#imagen-cambiante-masculino div p").html("<p style='margin-left: 74px'>Conocé nuestros jugadores de primera división</p>");
      $("#imagen-cambiante-masculino").stop().fadeIn(350);
      e.stopPropagation();
    });
    $("#primera").mouseout(function (ev) {
      $("#imagen-cambiante-masculino").stop().fadeOut(350);
     
      ev.stopPropagation();
    });
    $("#reserva").mouseover(function () {
      $("#foto").attr("src","img/dd1.png");
      $("#imagen-cambiante-masculino div p").html("<p style='margin-left: 74px'>Conocé nuestros jugadores de reserva</p>");
      $("#imagen-cambiante-masculino").stop().fadeIn(350);
    });
    $("#reserva").mouseout(function () {
      $("#imagen-cambiante-masculino").stop().fadeOut(350);
    });
    
    //PLANTEL 1 Y 2
    $("#plantel1").mouseover(function (e) {
      $("#foto").attr("src","img/av3.jpeg");
      $("#imagen-cambiante-masculino div p").html("<p style='margin-left: 50px'>Conocé nuestras jugadoras que integran el Plantel 1</p>");
      $("#imagen-cambiante-masculino").stop().fadeIn(350);
      e.stopPropagation();
    });
    $("#plantel1").mouseout(function (ev) {
      $("#imagen-cambiante-masculino").stop().fadeOut(350);
     
      ev.stopPropagation();
    });
    $("#plantel2").mouseover(function () {
      $("#foto").attr("src","img/dd1.png");
      $("#imagen-cambiante-masculino div p").html("<p style='margin-left: 50px'>Conocé nuestras jugadoras que integran el Plantel 2</p>");
      $("#imagen-cambiante-masculino").stop().fadeIn(350);
    });
    $("#plantel2").mouseout(function () {
      $("#imagen-cambiante-masculino").stop().fadeOut(350);
    });



    
  });

window.onscroll = function () { myFunction() };

function myFunction() {
  if (document.body.scrollTop > 160 || document.documentElement.scrollTop > 160) {
   
    document.getElementById("escudo").className = "";
    
    $("body").addClass("nav-is-fixed");
    var x = document.getElementsByClassName("nav-item");
    var i;
    for (i = 0; i < x.length; i++) {
      x[i].classList.add('animacion');
    }

  } else {
    
    document.getElementById("escudo").className = "d-none";
  
    $("body").removeClass("nav-is-fixed");
    var x = document.getElementsByClassName("nav-item");
    var i;
    for (i = 0; i < x.length; i++) {
      x[i].classList.remove('animacion');
    }
  }
}
