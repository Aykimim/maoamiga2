<!-- Olá, Eykimim -->
<!--///////////////////////////////////////////diretriz/////////////////////////////////////////////////-->

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
     <meta charset="utf-8">
     <title>Mão amiga</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
<h5>
Contato</br>

Autores: Eykimim Aniceto Pereira & YASMIM DUTRA COIMBRA .</br>
<div class="coluna">
				
					<img src="img/eykimim.jpg" alt="descrição da imagem"height="100" width="100" BORDER=5 style="width:100%">
				</div>
				<div class="coluna">
					<img src="img/yasmim.jpg" alt="descrição da imagem" height="100" width="100"BORDER=5 style="width:100%">
				</div>
			</div>

Para entrar em contato preencher o formulario</br>
</h5>


	<form action="enviar-email.php" method="post">
		  <input type="hidden" name="subject" 
  value="eykimim@hotmail.com" />
    <div>
        <label for="name">Nome:</label>
        <input type="text" id="nome" name="nome"  placeholder="Digite seu nome*" required>
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email"placeholder="Digite seu E-Mail*" required>
    </div>
   <!-- <div>
        <label for="msg">Telefone:</label>
        <input type="text" id="telefone"name="usuario_tel"placeholder="Digite seu Telefone"> 
    </div>-->
    <div>
        <label for="msg">Escreva sua mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="6" cols="25"></textarea>
    </div>

       <input type="submit" value="Enviar">
       <input type="reset" value="Cancelar">

	</form>
</body>



		
</html>
		
	<?php include 'footer.php'; ?>
     </nav>

</body>
</html>