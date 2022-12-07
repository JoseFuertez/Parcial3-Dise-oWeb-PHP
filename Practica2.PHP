<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title> My fist PHP page </title>
</head>

<body>
    <h1> Hello world </h1>
    <p> What is the current time and date? </p>
    <p> Your current time and date is: </p>
        <?php
            echo date("d.m.Y H:i:s");
        ?>.</p>
</body>

</html>
