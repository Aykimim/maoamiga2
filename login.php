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
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<!-- Conteúdo -->

<!--/////////////////////////////////////////  Carregar as sessões para a memória... ////////////////////////////-->
<!--https://blog.dankicode.com/como-criar-um-sistema-de-cadastro-com-php-e-mysql/

https://pt.stackoverflow.com/questions/175622/criar-p%C3%A1gina-de-perfil-de-acordo-com-o-usu%C3%A1rio-->


<form method="post" action="validarlogin.php" id="formlogin" name="formlogin" >
	<fieldset id="fie">
	<h1>LOGIN</h1><br />
	<label>Nome : </label>
	<input type="text" name="usuario" id="usuario"  /><br />
	<label>Senha :</label>
	<input type="password" name="senha" id="senha" /><br />
	<input type="submit" value="LOGAR  "  />
	</fieldset>
	</form>
	
	
	<!--///////////////////////////////////////////////////////////////////////////////////////-->


		
</html>
		
	<?php include 'footer.php'; ?>
     </nav>

</body>
</html>