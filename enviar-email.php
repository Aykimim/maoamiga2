<?php
$nome= $_POST['nome'];
$email = $_POST['email'];
$mensagem= $_POST['mensagem'];
$formcontent="Mensagem enviada por: $nome , Texto: $mensagem";
$recipient = "kimmim@kimmim.shop";
$subject = "Formulário de contato";
$mailheader = "De: $email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erro!");
echo "Obrigado por entrar em contato!";
?>





<!-- /////////////alerta a configurar//////////////// 

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>-->