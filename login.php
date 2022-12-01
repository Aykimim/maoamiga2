<?php include 'header.php'; ?>
<!-- Conteúdo -->
<html>



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
<!-- fim Conteúdo -->	
<?php include 'footer.php'; ?>