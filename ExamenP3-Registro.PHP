<?php 

include_once("con_db.php");
$Titulo = $_POST['Titulo'];
$Imagen = $_POST['Imagen'];
$Descripción = $_POST['Descripción'];
$Nombre = $_POST['Nombre'];
$Fecha = date("d/m/y");

$consulta = "INSERT INTO datos(Titulo, Imagen, Descripción, Nombre, Fecha) VALUES ('$Titulo','$Imagen','$Descripción','$Nombre','$Fecha')";
$resultado = mysqli_query($conex,$consulta);
	    

?>