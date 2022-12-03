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

<div class="formularioContato">

	<form method="post" action="enviar_email.php" enctype="multipart/form-data" >

		<input type="hidden" name="subject"  value="eykimim@hotmail.com" />

        <label for="name"><span>Nome:</span></label>
        <input type="text" name="nome"  placeholder="Digite seu nome:" required>
 
   
        <label for="email"><span>E-mail:</label>
        <input type="text" name="email"placeholder="Digite seu E-Mail:" class="fade_8S" required>
 

   <!-- <div>
        <label for="msg">Telefone:</label>
        <input type="text" id="telefone"name="usuario_tel"placeholder="Digite seu Telefone"> 
    </div>-->


        <label for="msg"><span>Escreva sua mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="3" ></textarea>


       <input type="submit" name="acao" value="Enviar">
       <input type="reset" value="Cancelar">

	</form>

    <input type="hidden"  value="enviar" />
            <button class="btn-envia" title="Enviar"><b class="icon icon-paper-plane-o"> Enviar</b></button>

        
            </form>
    </div>
    


</html>
<!-- fim Conteúdo -->	
<?php include 'footer.php'; ?>

<div class="formularioContato">
        
        <form action="#" method="post" enctype="multipart/form-data">

           
            
            

            <label>
                <span><i class="icon icon-flag"></i> Assunto</span>
                <input type="text" name="assunto" required="">
            </label>
            
            
           
            <input type="hidden" name="acao" value="enviar" />
            <button class="btn-envia" title="Enviar"><b class="icon icon-paper-plane-o"> Enviar</b></button>

        
        </form>

    </div><!--Formulario Contato-->