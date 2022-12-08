<?php 

include("con_db.php");
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $fechareg = date("d/m/y");
    $consulta = "INSERT INTO datos(Titulo, Imagen, Descripción, Nombre del autor, Fecha de publicación) VALUES ('$Titulo','$Imagen','$Descripción','$Nombre del autor','$Fecha de publicación')";
    $resultado = mysqli_query($conex,$consulta);
	    

?>