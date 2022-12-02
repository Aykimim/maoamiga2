<?php include 'header.php'; ?>
<!-- Conteúdo -->
<html>
<?php
    if (isset($_POST[“botao”]))
{
echo “botão foi clicado”;


$nome= $_POST['nome'];
$email = $_POST['email'];
$mensagem= $_POST['mensagem'];
$formcontent="De: $email \nMensagem enviada por: $nome \nReclamação: $mensagem ";
$recipient = "kimmim@kimmim.shop";
$subject = "Reclamação do mao amiga";
$mailheader = "De: $email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erro!");

function_alert("Mensagem enviada com sucesso");

function function_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
 
}
?>  





		
</html>
<!-- fim Conteúdo -->	
<?php include 'footer.php'; ?>