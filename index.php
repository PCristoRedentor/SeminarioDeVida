<?php

$servidor = getenv('MYSQLHOST') ?: 'mysql.railway.internal';
$usuario = getenv('MYSQLUSER') ?: 'root';
$clave = getenv('MYSQLPASSWORD') ?: 'QDIczPxlNKMLrykAessYpqJNWmeKHdKZ';
$bd = getenv('MYSQLDATABASE') ?: 'railway';
$puerto = getenv('MYSQLPORT') ?: '3306';

$conexion = mysqli_connect($servidor, $usuario, $clave, $bd, (int)$puerto);

if(!$conexion) {
  die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content=width="device-width", initial-scale="1.0">
    <title>formulario</title>
  </head>
  <body>

<form action"#" name="formulario" method="post">

</center>
  
<img src ="cristo.jpg" height="200" width="200";
<style="text.alling : right;"
<img src ="rcces.jpg" height="200" width="200";
  
<center>
<center><font size="16" color="1C1C1C"><b> Parroquia Cristo Redentor Del Hombre </b><p>
"Seminario de Vida en el Espíritu"<p>
<b>FICHA DE INSCRIPCIÓN</b><p>
<font size="12">
</center>

<p><input type="text" name="nombre" placeholder="nombre" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888"><p>
<p><input type="text" name="edad" placeholder="edad" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888""><p>
<p><input type="text" name="direccion" placeholder="direccion" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888""><p>
<p><input type="text" name="telefono" placeholder="telefono" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888""><p>
<p><input type="email" name="correo" placeholder="correo" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888""><p>
<p><input type="text" name="ocupacion" placeholder="ocupacion" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888""<p>
<p><input type="text" name="estadocivil" placeholder="Estado civil" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888""><p>  
<p><b>Sacramentos:</b></p>
<input type="checkbox" name="sacramentos[]" value="Bautismo" style="width: 40px; height: 40px;"> Bautismo<br>
<input type="checkbox" name="sacramentos[]" value="Comunion" style="width: 40px; height: 40px;"> Primera Comunión<br>
<input type="checkbox" name="sacramentos[]" value="Confirmacion" style="width: 40px; height: 40px;"> Confirmación<br>
<input type="checkbox" name="sacramentos[]" value="Matrimonio" style="width: 40px; height: 40px;"> Matrimonio<br>
<p><b>¿Asiste a algún grupo de la iglesia, sí, no, y a cuál?</b></p>
<input type="text" name="grupo" placeholder="" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888""><p> 
<p><b>¿Anteriormente ha asistido a un Seminario de Vida?</b></p>
<input type="radio" name="seminario" value="Si" required style="width: 40px; height: 40px;"> Si<br>
<input type="radio" name="seminario" value="No" style="width: 40px; height: 40px;"> No<br>
<p><b>¿A qué Parroquia pertenece?</b></p>
<input type="text" name="parroquia" placeholder="" required style="width: 500px; padding: 24px; font-size: 32px; border-radius: 15px; border: 2px solid #888""><p>

  <center>
<input type="submit" name="registro" style="width: 350px; padding: 24px; font-size: 32px;">
<p><b>!Te esperamos 15 minutos antes de las 8¡</b></p>
</center>

</form>

  </body>

<?php



if(isset($_POST['registro'])){

$nombre= $_POST ['nombre'];
$edad= $_POST ['edad'];
$direccion= $_POST ['direccion'];
$telefono= $_POST ['telefono'];
$correo= $_POST ['correo'];
$ocupacion= $_POST ['ocupacion'];
$estadocivil= $_POST ['estadocivil'];
$sacramentos = isset($_POST['sacramentos']) ? implode(",", $_POST['sacramentos']) : "";
$grupo= $_POST ['grupo'];
$seminario= $_POST ['seminario'];
$parroquia= $_POST ['parroquia'];

$insertarDatos = "INSERT INTO datos VALUES('$nombre', '$edad','$direccion', '$telefono', '$correo', '$ocupacion', '$estadocivil', '$sacramentos', '$grupo', '$seminario', '$parroquia')";

$ejecutarInstertar = mysqli_query ($conexion, $insertarDatos);

}
?>
