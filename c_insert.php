<!-- ******************************Esto es  CREATE del (CRUD) ***************************************-->
<?php
include_once('Conexion.php');//incluyo el archivo de la conexion de la BD a este archivo
//Recibo todos los datos del formulario por medio del atributo "name"
$NombreV=$_POST['NombreP'];
$ApellidoV=$_POST['ApellidoP'];
$CorreoV=$_POST['CorreoP'];
$EdadV=$_POST['EdadP'];
$SexoV=$_POST['SexoP'];
$AsuntoV=$_POST['AsuntoP'];
//echo"Los datos a enviar son: <br>";
//echo "$NombreV, $ApellidoV";

    $conectar=conexionConPHP();//ejecuta la conexion a la BD
	$sql="INSERT INTO formulario (nombre,apellido,edad,sexo,asunto) VALUES ('$NombreV','$ApellidoV','$CorreoV','$EdadV','$SexoV','$AsuntoV')";
	$query=mysqli_query($conectar,$sql) or trigger_error("Hubo un error en: ".mysqli_error($conectar), E_USER_ERROR);
	if($query){
		Header("Location: /formulario.html");
		}
?>