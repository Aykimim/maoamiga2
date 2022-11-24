<?php
    $dbname="kimmim21_maoamigaassis";
    $dbuser="kimmim21_eykimim";
    $dbpassword="pozinhomajicu18";

    try{
        $conn=new PDO('mysql:host=localhost;dbname=kimmim21_maoamigaassis'.$dbname,$dbuser,$dbpassword); #1
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); #2
    }catch(PDOException $error){
        return '<h3>Erro de conexão:</h3><p>'.$error->getMessage().'</p>';
    }
?>