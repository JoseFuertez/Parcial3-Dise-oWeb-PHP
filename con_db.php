<?php
function conex(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="registro";
}
$conex = mysqli_connect($servername,$username,$password,$dbname); 
return $conex;
?>