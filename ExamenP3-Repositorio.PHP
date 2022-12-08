<?php
$conexion=mysqli_connect('localhost','root','', 'registro')
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <title> 3er Parcial - Diseño web </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<header> 
    <h1 class="En">
    Diseño web - Examen tercer parcial
    </h1>

    <h2 class="En2">
    / Blog de Jose Fuertes /
    </h2>
   
    <br>    
    <button class="button-59">
            <a href="ExamenP3-Inicio.php"> Registro de articulos </a>
    </button>
    <br>
    <br>
    <hr>
</header>

<body>
    
    <table class="paleBlueRows">
        <tr>
            <td>Titulo</td>
            <td>Imagen</td>
            <td>Descripción</td>
            <td>Nombre</td>
            <td>Fecha</td>
        </tr>

<?php
$sql="SELECT * from datos";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
        <tr>
            <td> <?php echo $mostrar['Titulo'] ?> </td>
            <td> <?php echo $mostrar['Imagen'] ?> </td>
            <td> <?php echo $mostrar['Descripción'] ?> </td>
            <td> <?php echo $mostrar['Nombre'] ?> </td>
            <td> <?php echo $mostrar['Fecha'] ?> </td>
        </tr>

<?php
}
?>

    <table>
</body>
</html>

