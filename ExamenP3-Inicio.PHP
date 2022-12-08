<!DOCTYPE html>
<html lang="es">

<head>
    <title> 3er Parcial - Diseño web </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <form method="post">
        
    <h1> Hello world </h1>

    <input type="text" name="Titulo" placeholder="Titulo">
    <input type="text" name="Imagen">
    <input type="text" name="Descripción" placeholder="Titulo">
    <input type="text" name="Nombre del autor" placeholder="Titulo">
    <input type="text" name="Fecha de publicación" placeholder="Titulo">

    <input type="submit" name="register">

    </form>

    <?php 
        include("ExamenP3-Registro.PHP");
    ?>

</body>
</html>

