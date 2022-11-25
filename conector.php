<meta charset="utf-8">
<?php
$host = "localhost";
$user = "kimmim21_eykimim";
$pass = "pozinhomajicu18";
$banco = "kimmim21_maoamigaassis";
$conexao = new mysqli($host,$user,$pass,$banco);

if (mysqli_connect_errno()) {
    die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
}
?>