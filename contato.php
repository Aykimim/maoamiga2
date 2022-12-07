<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>-->
	
<?php include 'header.php'; ?>
<!-- Conteúdo -->
<html>

<h5>
    Contato</br>

Autores: Eykimim Aniceto Pereira & YASMIM DUTRA COIMBRA .</br>
<div class="contato">
				
					<img src="img/eykimim.jpg" alt="descrição da imagem" height="200" width="200" vspace="5" hspace="4">
				
					<img src="img/yasmim.jpg" alt="descrição da imagem" height="200" width="200" vspace="5" hspace="4">
				
			</div>

Para entrar em contato preencher o formulario</br>
</h5>

<div class="formularioContato">

	<form method="post" action="enviar_email.php" enctype="multipart/form-data" >

		<input type="hidden" name="subject"  value="eykimim@hotmail.com" />

        </br><label for="name"><span>Nome:</span></label>
        <input type="text" name="nome"  placeholder="Digite seu nome:" required>
 
   
        </br><label for="email"><span>E-mail:</span></label>
        <input type="text" name="email"placeholder="Digite seu E-Mail:" class="fade_8S" required>
 




        </br><label for="msg"><span>Escreva sua mensagem:</span></label>
        <textarea id="mensagem" name="mensagem" rows="3" ></textarea></br>


       <input type="submit" name="acao" value="Enviar">
       <input type="reset" value="Cancelar">

            </form>
    </div>
    


</html>
<!-- fim Conteúdo -->	
<?php include 'footer.php'; ?>
