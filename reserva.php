<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equipo</title>
        <!--MENU RESPONSIVO-->
    <link rel="stylesheet" href="css/css/navigation1.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/css/navigation2.css"> <!-- Resource style -->
	<script src="js/js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="css/navigation-responsive.css">
    <link rel="stylesheet" href="css/navigation-responsive1.css">

    <!--BOOTSTRAP CSS-->
    <link rel="icon" type="image/png" href="img/avellaneda.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/avellaneda.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/avellaneda.png" sizes="64x64">
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
    <link rel="stylesheet" href="css/css/navigation1.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/css/navigation2.css"> <!-- Resource style -->
    <script src="js/js/modernizr.js"></script> <!-- Modernizr -->
    

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilo_jugador.css">
    <link rel="stylesheet" href="css/lightbox.css">

    


    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:800&display=swap" rel="stylesheet">
    <script src="js/carousel.js"></script>

    
    
</head>
<body background="img/dd1.png">

<?php require_once "header.php"?>

<?php
require_once "navigation1.php"?>
<section >


<div class="container">
<h1 class="titulo-jugador">Plantel Masculino- <strong>RESERVA</strong></h1>


<div class="container">
  <img style="width: 100%"src="img/av3.jpeg" alt="">
</div>


<section class="text-center">




<div class="row no-gutters" style="margin-right: 0; margin-left:0;">
<?php
        $miconexion= mysqli_connect("localhost", "root", "", "avellaneda");

        //Compruebo conexion
        if(!$miconexion){
            echo "La conexion ha fallado: ";
            exit();
        }
        $miconsulta="SELECT * FROM plantel where reserva = '1'";
        if($resultado= mysqli_query($miconexion, $miconsulta)){
            while ($registro= mysqli_fetch_assoc($resultado)){
                $id_jugador=$registro['codJug'];
                $foto_cara=$registro['fotoCara'];
                if($foto_cara==null){
                    $foto_cara="person.png";
                }

        ?>
    <div class="col-lg-3 col-6 col-sm-6 col-md-6" style="padding-right: 0; padding-left:0;">

      <div class="card" style="margin-top: 2%;">
                        <div class="card-body jugador">
                            <a class="carta-jugador" href="jugador.php?id=<?php echo "$id_jugador" ?>" style="text-decoration:none; color:black" title="Información acerca del jugador">
                            <img src="img/<?php echo "$foto_cara"; ?>" class="img-fluid rounded-circle" style="width: 50%;display:block;margin:auto;" alt="person">
                            <hr>
                            <span class="posicion-carta">
                            <?php if($registro['codPosi']==1){echo "Arquero";}elseif($registro['codPosi']==2){echo "Defensor";}elseif($registro['codPosi']==3){echo "Mediocampista";}elseif($registro['codPosi']==4){echo "Delantero";} ?>
                            </span>
                            <h3 class="nombre">
                            <?php echo  $registro['nombre'] . "<br>" .  $registro['apellido'] ; ?>
                            </h3>
                            <h2 class="numeros display-4">
                            <?php echo  $registro['dorsal']; ?>
                            </h2>    
                        </div>


                            <div id="fondo-icono" class="d-flex flex-row justify-content-center align-middle">
                            <?php if($registro['facebook']!= null){
                                $facebook=$registro['facebook'];
                            ?>
                                <div class="red p-2">
                                <a href="<?php echo "$facebook"; ?>" target="blank">
                                        <i id="icono" class="fab fa-facebook-square"></i>
                                    </a>
                                </div>
                            <?php }else{}
                            if($registro['twitter']!=null){

                            $twitter=$registro['twitter'];
                            ?>
                                <div class="d-flex flex-row justify-content-center align-middle">
                                    <div class="p-2">
                                        <a href="<?php echo "$twitter"; ?>" target="blank">
                                            <i id="icono" class="fab fa-twitter"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php }else{}

                            if($registro['instagram']!=null){
                                $instagram=$registro['instagram'];
                            ?>
                                <div class="d-flex flex-row justify-content-center align-middle">
                                    <div class="p-2">
                                        <a href="<?php echo "$instagram";?>" target="blank">
                                            <i id="icono" class="fab fa-instagram"></i>
                                        </a>
                                    </div>



                            </div>
                            <?php }else{} ?>
                        </div>
                    </div>
                    </a>
                </div>
                <?php
            }
        }
        ?>
                
                </div>
                </section>




            </section>
    <!--FOOTER-->
    <?php require_once "footer.php" ?>
    <?php require_once "navigation2.php" ?>


    <!--SCRIPT NAVBAR-->
    <script src="js/funciones.js"></script>
</body>
</html>
=======
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
    <link rel="stylesheet" href="css/estilo_jugador.css">
    <link rel="stylesheet" href="css/estilo-fondo.css">

    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>

<?php require_once "header.php";
?>

<?php
require_once "navbar.php";
?>
<section class="imagen-de-fondo">


<div class="container">
<h1 class="titulo-jugador">Plantel Masculino- <strong>RESERVA</strong></h1>

<div class="container">
  <img style="width: 100%"src="img/av3.jpeg" alt="">
</div>

</div>
<section class="text-center">
<form action="" method="get">

<div class="container m-auto">

<div class="row no-gutters" style="margin-right: 0; margin-left:0;">
<?php
        $miconexion= mysqli_connect("localhost", "root", "", "avellaneda");

        //Compruebo conexion
        if(!$miconexion){
            echo "La conexion ha fallado: ";
            exit();
        }
        $miconsulta="SELECT * FROM plantel where reserva= '1'";
        if($resultado= mysqli_query($miconexion, $miconsulta)){
            while ($registro= mysqli_fetch_assoc($resultado)){
                
                $foto_cara=$registro['fotoCara'];
                if($foto_cara==null){
                    $foto_cara="person.png";
                }

        ?>
    <div class="col-lg-3 col-6 col-sm-6 col-md-6" style="padding-right: 0; padding-left:0">

      <div class="card" style="margin-top: 2%;">
                        <div class="card-body">
                            <span class="posicion-reserva">
                        <?php if($registro['codPosi']==1){echo "Arquero";}elseif($registro['codPosi']==2){echo "Defensor";}elseif($registro['codPosi']==3){echo "Mediocampista";}elseif($registro['codPosi']==4){echo "Delantero";} ?>
                        </span>
                        <h3 class="nombre-reserva">    
                        <?php echo $registro['nombre'] . "<br>" .  $registro['apellido']; ?>
                        </h3>
                        <h2 class="numeros-reserva display-4"> 
                        <?php echo   $registro['dorsal'] ; ?>
                        </h2>
                        <hr>
                            <p>Altura: <strong><?php echo $registro['altura']; ?></strong></p>
                            <p>Peso: <strong><?php echo $registro['peso']; ?></strong></p>
                            <p>Pierna hábil: <strong><?php if($registro['codPierna']==1){echo "Derecha";}elseif($registro['codPierna']==2){echo "Izquierda";}elseif($registro['codPierna']==5){echo "Ambas";} ?></strong></p>
                            
                            </div>

           
                            



                            </div>
                           
                        
                    </div>
                    <?php
            }
        }
            ?>
                </div>
</div>
                </form>

                </section>




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
>>>>>>> 423f165feedb0cdce6dbc74278605eddac3a996d
