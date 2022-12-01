<h1>Alterar password</h1>
 <?php
    require ("conector.php");
    ?>
    <?php
  if( empty($_GET['utilizador']) || empty($_GET['confirmacao']) )
    die('<p>Não é possível alterar a password: dados em falta</p>');
 
   
 
  $user = mysql_real_escape_string($_GET['utilizador']);
  $hash = mysql_real_escape_string($_GET['confirmacao']);
 
  $q = mysql_query("SELECT COUNT(*) FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");
 
  if( mysql_result($q, 0, 0) == "1" ){

    mysql_query("DELETE FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");
 
    echo 'Sucesso! (Mostrar formulário de alteração de password aqui)';   
 
  } else {
    echo '<p>Não é possível alterar a password: dados incorretos</p>';
 
  }
 
?>