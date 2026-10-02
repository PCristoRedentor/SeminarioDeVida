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
  
<center>
<center><font size="16" color="1C1C1C"><b> Parroquia Cristo Redentor Del Hombre </b><p>
"Seminario de Vida en el Espíritu"<p>
<b>FICHA DE INSCRIPCION</b><p>
<font size="12">

<p><input type="text" name="nombre" placeholder="nombre" style="width: 500px; padding: 24px; font-size: 32px;"><p>
<p><input type="text" name="edad" placeholder="edad" style="width: 500px; padding: 24px; font-size: 32px;"><p>
<p><input type="text" name="direccion" placeholder="direccion" style="width: 500px; padding: 24px; font-size: 32px;"><p>
<p><input type="text" name="telefono" placeholder="telefono" style="width: 500px; padding: 24px; font-size: 32px;"><p>
<p><input type="email" name="correo" placeholder="correo" style="width: 500px; padding: 24px; font-size: 32px;"><p>
<p><input type="text" name="ocupacion" placeholder="ocupacion" style="width: 500px; padding: 24px; font-size: 32px;"<p>
<p><input type="text" name="estadocivil" placeholder="Estado civil" style="width: 500px; padding: 24px; font-size: 32px;"><p>  
<p><b>Sacramentos:</b></p>
<input type="checkbox" name="sacramentos[]" value="Bautismo" style="width: 40px; height: 40px;"> Bautismo<br>
<input type="checkbox" name="sacramentos[]" value="Comunion" style="width: 40px; height: 40px;"> Primera Comunión<br>
<input type="checkbox" name="sacramentos[]" value="Confirmacion" style="width: 40px; height: 40px;"> Confirmación<br>
<input type="checkbox" name="sacramentos[]" value="Matrimonio" style="width: 40px; height: 40px;"> Matrimonio<br>
<p><b>¿Asiste a algún grupo de la iglesia, sí, no, y a cuál?</b></p>
<input type="text" name="grupo" placeholder="" style="width: 500px; padding: 24px; font-size: 32px;"><p> 
<p><b>¿Anteriormente ha asistido a un Seminario de Vida?</b></p>
<input type="radio" name="estadocivil" value="Si" style="width: 40px; height: 40px;"> Si<br>
<input type="radio" name="estadocivil" value="No" style="width: 40px; height: 40px;"> No<br>
<p><b>¿A qué Parroquia pertenece?</b></p>
<input type="text" name="parroquia" placeholder="" style="width: 500px; padding: 24px; font-size: 32px;"><p>

  
<input type="submit" name="registro" style="width: 500px; padding: 24px; font-size: 32px;">


</form>

  </body>

<?php

if(isset($_POST['registro'])){

$nombre= $_POST ['nombre'];
$edad= $_POST ['edad'];
$correo= $_POST ['correo'];
$telefono= $_POST ['telefono'];

$insertarDatos = "INSERT INTO datos VALUES('$nombre', '$edad', '$correo', '$telefono')";

$ejecutarInstertar = mysqli_query ($conexion, $insertarDatos);

}
?>
