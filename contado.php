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
<body>
<h1>
Contato</br>

Autores: Eykimim Aniceto Pereira & YASMIM DUTRA COIMBRA .</br>

Para entrar em contato preencher o formulario</br>
</h1>





	<form name="contact" method="post" data-netlify="true">
		  <input type="hidden" name="subject" 
  value="eykimim@hotmail.com" />
    <div>
        <label for="name">Nome:</label>
        <input type="text" id="nome" name="usuario_nome"  placeholder="Digite seu nome*" required>
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="usuario_email"placeholder="Digite seu E-Mail*" required>
    </div>
    <div>
        <label for="msg">Telefone:</label>
        <input type="text" id="telefone"name="usuario_tel"placeholder="Digite seu Telefone"> 
    </div>
    <div>
        <label for="msg">Escreva uma mensagem:</label>
        <textarea id="mensagem"name="mensagem"placeholder="Mensagem*" ></textarea>
    </div>

       <input type="submit" value="Enviar">
		

	</form>
</body>



		
</html>
		
	<?php include 'footer.php'; ?>
     </nav>

</body>
</html>