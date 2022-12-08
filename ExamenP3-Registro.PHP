<?php 

include("con_db.php");
$Titulo = trim($_POST['Titulo']);
$Imagen = trim($_POST['Imagen']);
$Descripción = trim($_POST['Descripción']);
$Nombre = trim($_POST['Nombredelautor']);
$Fecha = date("d/m/y");

$consulta = "INSERT INTO datos(Titulo, Imagen, Descripción, Nombre del autor, Fecha de publicación) VALUES ('$Titulo','$Imagen','$Descripción','$Nombredelautor','$Fecha')";
$resultado = mysqli_query($conex,$consulta);
	    

?>