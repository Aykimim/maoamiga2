<!-- Olá, Eykimim -->
<!--///////////////////////////////////////////diretriz/////////////////////////////////////////////////-->
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
     <meta charset="utf-8">
     <title>Mão amiga</title>
	 <style rel='stylesheet' type='text/css'>

	</style>
	<link href='style.css' rel='stylesheet' type='text/css' />
</head>
<body>


     <nav>
		
		<?php include 'header.php'; ?>
		<html>

<!-- Conteúdo -->

<h1>Perdi a password</h1>
<?php
    require ("conector.php");
    ?>
<?php
  if( !empty($_POST) ){
    // processar o pedido
    

 
    $user = mysql_real_escape_string($_POST['email']);
    $q = mysql_query("SELECT * FROM utilizadores WHERE email = '$user'");
 
    if( mysql_num_rows($q) == 1 ){

      $chave = sha1(uniqid( mt_rand(), true));
 
   
      $conf = mysql_query("INSERT INTO recuperacao VALUES ('$user', '$chave')");
	  echo "INSERT INTO recuperacao VALUES ('$user', '$chave')";
 
      if( mysql_affected_rows() == 1 ){
 
        $link = "http://example.net/recuperar.php?utilizador=$user&confirmacao=$chave";
 
        if( mail($user, 'Recuperação de password', 'Olá '.$user.', visite este link '.$link) ){
          echo '<p>Foi enviado um e-mail para o seu endereço, onde poderá encontrar um link único para alterar a sua password</p>';
 
        } else {
          echo '<p>Houve um erro ao enviar o email (o servidor suporta a função mail?)</p>';
 
        }
 
		// Apenas para testar o link, no caso do e-mail falhar
		echo '<p>Link: '.$link.' (apresentado apenas para testes; nunca expor a público!)</p>';
 
      } else {
        echo '<p>Não foi possível gerar o endereço único</p>';
 
      }
    } else {
	  echo '<p>Esse utilizador não existe</p>';
	}
  } else {
    // mostrar formulário de recuperação
?>
<form method="post">
  <label for="email">E-mail:</label>
  <input type="text" name="email" id="email" />
  <input type="submit" value="Recuperar" />
</form>
<?php
  }
?>



</html>
		
	<?php include 'footer.php'; ?>
     </nav>

</body>
</html>