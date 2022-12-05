<?php
    require ("conector.php");
    ?>

<?



$insertSQL = sprintf("INSERT INTO perfis (id, nome, usuario, foto) VALUES (%s, %s, %s, %s)",

                       GetSQLValueString("a", "text"),

                       GetSQLValueString($_POST['nome'], "text"),

                       GetSQLValueString($_POST['usuario'], "text"),

                       GetSQLValueString($_POST['foto'], "text"));





  mysql_select_db($database_conexao, $conexao);

  $Result1 = mysql_query($insertSQL, $conexao) or die(mysql_error());







echo "<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php?u=". $usuario ."'>";

?>