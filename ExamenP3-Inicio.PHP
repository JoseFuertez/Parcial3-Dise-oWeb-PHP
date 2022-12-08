<!DOCTYPE html>
<html lang="es">

<head>
    <title> 3er Parcial - Diseño web </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<header> 
    <h1 class="En">
    Diseño web - Examen segundo parcial
    </h1>

    <h2 class="En2">
    / Inicio /
    </h2>
   
    <br>    
    <button class="button-59">
            <a href="P2-¿Quienes somos.html"> Repositorio de articulos </a>
    </button>
    <br>
    <hr>
</header>

<body>
    <form method="post">
        
    <h1> Blog de Jose Fuertes </h1>
    <h3> Registro de articulos </h3>

    <input type="text" name="Titulo" placeholder="Titulo">
    <input type="text" name="Imagen" placeholder="URL de la imagen">
    <input type="text" name="Descripción" placeholder="Descripción">
    <input type="text" name="Nombre" placeholder="Nombre del autor">
    <input type="date" name="Fecha">

    <input type="submit" name="register">

    </form>

    <?php 
        include("ExamenP3-Registro.PHP");
    ?>


</body>
</html>

