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
    <!--CSS-->
    <link rel="stylesheet" href="css/estilos.css">
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>

<body style="height:2450px">

    <!--HEADER-->

   <?php require_once "header.php" ?>

    <!--NAVEGACIÓN-->

   <?php require_once "navbar.php" ?>

   <?php require_once "carousel.php" ?>

    <div class="container">
      <div class="container-noticias">
        asdasdasgfagg
      </div>
    </div>


    <!--SCRIPT NAVBAR-->
    <script>
      window.onscroll = function () { myFunction() };

function myFunction() {
    if (document.body.scrollTop > 245 || document.documentElement.scrollTop > 245) {
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
