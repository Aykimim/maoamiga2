<?php

$hostname = "localhost";
$usuario = "kimmim21_eykimim";
$senha = "abacaxi1804";
$bancodedados = "kimmim21_bancodedados";

$mysqli = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
 
if (mysqli_connect_errno()) {
    die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
?>
<!--
   
if ($mysqli) {
    echo "conectado ao banco de dados";
}
else {
    echo "Não foi possível conectar-se ao banco de dados:";
}
-->
<!--
$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
-->