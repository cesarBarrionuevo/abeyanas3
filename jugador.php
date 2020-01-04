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
    <link rel="stylesheet" href="css/estilo_jugador.css">
    <link rel="stylesheet" href="css/estilo-fondo.css">

    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
</head>
<body>



    <!--HEADER-->

   <?php require_once "header.php" ?>

    <!--NAVEGACIÓN-->

   <?php require_once "navbar.php" ?>
<section class="imagen-de-fondo">
   <?php
$id=$_GET['id'];
$miconexion= mysqli_connect("localhost", "root", "cabs", "avellaneda");

        //Compruebo conexion
        if(!$miconexion){
            echo "La conexion ha fallado: ";
            exit();
        }
        $miconsulta="SELECT * FROM plantel where codJug='". $id . "'";
        if($resultado= mysqli_query($miconexion, $miconsulta)){
            while ($registro= mysqli_fetch_assoc($resultado)){

                $foto_torso=$registro['fotoDorso'];
                if($foto_torso==null){
                    $foto_torso="jugador-none.png";
                }


?>

<div class="ficha container">
<h2 class="titulo-jugador" style="text-align: left;">Ficha del Jugador</h2>
<div class="row no-gutters">
        <div class="foto-jugador col-12 col-sm-12 col-lg-6">
            <div class="imagen-jugador py-1">
                <span class="contiene-imagen">
                <img class="img-fluid rounded d-block m-l-none" src="img/<?php echo $foto_torso; ?>"  style="width:auto; height:540px; margin-left:auto; margin-right:auto;" alt="">
                </span>
            </div>
        </div>
        <div class="info-jugador col-12 col-sm-12 col-lg-6">
            <div class="ficha-jugador">
                    <h2 class="titulo-jugador"><?php echo $registro['nombre'] . " " . $registro['apellido']; ?></h2>
                    <h3 class="posicion-jugador"><?php if($registro['codPosi']==1){echo "<p>Arquero</p>";}elseif($registro['codPosi']==2){echo "<p>Defensor</p>";}elseif($registro['codPosi']==3){echo "<p>Mediocampista</p>";}elseif($registro['codPosi']==4){echo "<p>Delantero</p>";} ?></h3>
                    <dl class="atributos">
                        <dt>Fecha de Nacimiento: </dt>
                        <dd><?php echo $registro['fecNac']; ?></dd>
                        <dt>Lugar de Nacimiento: </dt>
                        <dd><?php echo $registro['lugarNac']; ?></dd>
                        <dt>Nacionalidad: </dt>
                        <dd><?php echo $registro['nacionalidad']; ?></dd>
                        <dt>Altura: </dt>
                        <dd><?php echo $registro['altura'] . "cm" ?></dd>
                        <dt>Peso: </dt>
                        <dd><?php echo $registro['peso'] . "kg" ?></dd>
                        <dt>Pierna hábil: </dt>
                        <dd><?php if($registro['codPierna']==1){echo "Derecha" ;}elseif($registro['codPierna']==2){echo "Izquierda";}elseif($registro['codPierna']==5){echo "Ambas";} ?></dd>
                        <dt>Procedencia: </dt>
                        <dd><?php echo $registro['procedencia']; ?></dd>
                    </dl>

                    <a class="btn btn-outline-danger btn-lg btn-block" href="equipo.php" title="Volver al plantel">VOLVER A EL PLANTEL</a>

                </div>
            </div>

</div>

</div>
            <?php
            }
            }
            ?>


</section>

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
</script>


</body>
</html>
