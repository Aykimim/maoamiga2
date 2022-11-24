<?php
 
$conn = "";
  
try {
    $servername = "localhost:3306";
    $dbname = "kimmim21_maoamigaassis";
    $username = "kimmim21";
    $password = "";
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=kimmim21_maoamigaassis	",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>