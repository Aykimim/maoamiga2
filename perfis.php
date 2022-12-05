<?php include 'header.php'; ?>
<!-- Conteúdo -->
<html>

<?php
require ("conector.php");
?>


<?php

$sql = "SELECT * FROM Anunciante ORDER BY id desc";

$executar = mysql_query($sql);

while( $exibir = mysql_fetch_array($executar)){
echo $exibir['foto'];
echo "</br>";

echo $exibir['nome'];
echo "</br>";

echo $exibir['nomeexibido'];
echo "</br>";

echo $exibir['email'];
echo "</br>";

echo $exibir['biografia'];
echo "</br>";

echo $exibir['cidade'];
echo "</br>";

echo $exibir['servico'];
echo "</br>";

}
?>



<?php
$kimmim21_bancodedados = mysql_select_db("comentario")
?>

<form name="form" method="post" action="#">
Nome:
<input type=text name=nome>
<br><br>
Mensagem:
<br><textarea name=comentarios></textarea>
<br><br>
<input type=submit value=Enviar>
<input type=reset value=Limpar>
</form>
<?php
$nome=$_POST['nome'];
$data = date("Y/m/d");           
$comentarios=$_POST['comentarios'];
?>
<hr>

<?php
$insert = mysql_query("INSERT INTO comentario(nome,data,comentarios) 
values('$nome','$data','$comentarios')");

$sql = "SELECT * FROM comentario ORDER BY id desc";

$executar = mysql_query($sql);

while( $exibir = mysql_fetch_array($executar)){
echo $exibir['data'];
echo "</br>";
echo $exibir['nome'];
echo "</br>";
echo $exibir['email'];
echo "</br>";
echo $exibir['comentarios'];
echo "</br><hr>";
}
?>		
</html>
<!-- fim Conteúdo -->	
<?php include 'footer.php'; ?>
