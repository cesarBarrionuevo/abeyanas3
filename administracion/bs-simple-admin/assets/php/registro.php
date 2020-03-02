<?php
$nombre=isset($_GET['nombre']) ? $_GET['nombre'] : $_POST['nombre'];
$apellido=isset($_GET['apellido']) ? $_GET['apellido'] : $_POST['apellido'];
$fecha_nac=isset($_GET['f_nacimiento']) ? $_GET['f_nacimiento'] : $_POST['f_nacimiento'];
$dorsal=isset($_GET['dorsal']) ? $_GET['dorsal'] : $_POST['dorsal'];
$l_nac=isset($_GET['l_nac']) ? $_GET['l_nac'] : $_POST['l_nac'];
$prov=isset($_GET['prov']) ? $_GET['prov'] : $_POST['prov'];
$nacio=isset($_GET['nac']) ? $_GET['nac'] : $_POST['nac'];
$altura=isset($_GET['altura']) ? $_GET['altura'] : $_POST['altura'];
$peso=isset($_GET['peso']) ? $_GET['peso'] : $_POST['peso'];
$face=isset($_GET['face']) ? $_GET['face'] : $_POST['face'];
$twitter=isset($_GET['twitter']) ? $_GET['twitter'] : $_POST['twitter'];
$insta=isset($_GET['insta']) ? $_GET['insta'] : $_POST['insta'];
$poscion=isset($_GET['posicion']) ? $_GET['posicion'] : $_POST['posicion'];
$pie=isset($_GET['pie']) ? $_GET['pie'] : $_POST['pie'];
$equipo=isset($_GET['equipo']) ? $_GET['equipo'] : $_POST['equipo'];
$cara=isset($_GET['imagen_cara']) ? $_GET['imagen_cara'] : $_POST['imagen_cara'];
$dorso=isset($_GET['imagen_dorso']) ? $_GET['imagen_dorso'] : $_POST['imagen_dorso'];

                    $base = new PDO("mysql:host=localhost; dbname=avellaneda", "root", "");
                    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql_insert = "INSERT INTO plantel (nombre, apellido, dorsal, fecNac, lugarNac  , provincia,) VALUES (:cod_art, :nom_art, :descripcion, :precio_art, :stock, :imagen)";
                    $resultado = $base->prepare($sql_insert);
                    $resultado->execute(array(":cod_art" => $cod_art, ":nom_art" => $nombre_art, ":descripcion" => $descripcion, ":precio_art" => $prec_art, ":stock" => TRUE, ":imagen" => $laimagen));
