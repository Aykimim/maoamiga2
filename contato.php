<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>-->
	
<?php include 'header.php'; ?>
<!-- Conteúdo -->
<html>

<h5>
    Contato</br>

Autores: Eykimim Aniceto Pereira & YASMIM DUTRA COIMBRA .</br>
<div class="contato">
				
					<img src="img/eykimim.jpg" alt="descrição da imagem" height="100" width="100" vspace="5" hspace="5">
				
					<img src="img/yasmim.jpg" alt="descrição da imagem" height="100" width="100" vspace="5" hspace="5">
				
			</div>

Para entrar em contato preencher o formulario</br>
</h5>


	<form method="post" action="enviar_email.php" >
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

       <input type="submit" value="Enviar" name="botao">
       <input type="reset" value="Cancelar">

	</form>


</html>
<!-- fim Conteúdo -->	
<?php include 'footer.php'; ?>