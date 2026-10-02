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


<input type="text" name="nombre" placeholder="nombre" style="width: 400px; padding: 16px;"><p>
<input type="text" name="edad" placeholder="edad"><p>
<input type="text" name="direccion" placeholder="direccion"><p>
<input type="text" name="telefono" placeholder="telefono"><p>
<input type="email" name="correo" placeholder="correo"><p>
<input type="text" name="ocupacion" placeholder="ocupacion"><p>  
<input type="text" name="estadocivil" placeholder="Estado civil"><p>  
Sacramentos:<p>  

<input type="submit" name="registro">
<input type="reset">


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
