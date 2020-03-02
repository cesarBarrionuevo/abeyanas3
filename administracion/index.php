<?php
session_start();



if (isset($_SESSION["user"])) {
   
            header('Location:bs-simple-admin/index.php');
         
    
}

if(isset($_POST["enviar"])){
    $user = $_POST["login"];
    $pass = $_POST["password"];
	try {
        $base = new PDO("mysql:host=localhost; dbname=avellaneda", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM usuarios WHERE user='$user' AND password = '$pass'";
        $resultado = $base->query($sql);


        $num_registros = $resultado->rowCount();

        if ($num_registros != 0) {


            
            $_SESSION["user"] = $_POST["login"];

            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                   $usuario=$registro["user"];
                   $_SESSION["user"]=$usuario;
               
                        
                        header('Location: bs-simple-admin/index.php');
                    
                        
                       
			 
            }
        } else {
			
            echo "<p style='text-align: center; background-color:#DB5235; color:white'>Error: Usuario y/o contraseña incorrectos</p>";
            include_once 'index.php';
        }
    } catch (Exception $ex) {
        echo "Error al conectar con base de datos: " . $ex->getMessage();
        echo "<br> Error en la línea: " . $ex->getLine();
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!--PLUGIN VALIDACIÓN-->
<script src="js/jquery-validate-plugin.js"></script>
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="#" method="post" >
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Debes ingresar un usuario">
						<input class="input100" type="text" name="login"  placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Debes ingresar una contraseña">
						<input class="input100" type="password"  name="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input type="submit" name="enviar" class="login100-form-btn" value="Login">
						<div id="contenido-externo">

						</div>	
						
					</div>

					

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>