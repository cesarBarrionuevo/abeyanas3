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
