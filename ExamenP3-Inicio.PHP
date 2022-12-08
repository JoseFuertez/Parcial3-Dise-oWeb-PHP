<!DOCTYPE html>
<html lang="es">

<head>
    <title> 3er Parcial - Diseño web </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <form method="post">
        
    <h1> Blog de Jose Fuertes </h1>
    <h3> Registro de articulos </h3>

    <input type="text" name="Titulo" placeholder="Titulo">
    <input type="text" name="Imagen" placeholder="URL de la imagen">
    <input type="text" name="Descripción" placeholder="Descripción">
    <input type="text" name="Nombre del autor" placeholder="Nombre del autor">
    <input type="date" name="Fecha de publicación" placeholder="Fecha de publicación">

    <input type="submit" name="register">

    </form>

    <?php 
        include("ExamenP3-Registro.PHP");
    ?>

</body>
</html>

