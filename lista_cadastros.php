<?php include 'header.php'; ?>
<!-- Conteúdo -->
<html>

<?php
require ("conector.php");
?>

<?php
$kimmim21_bancodedados = mysql_select_db("anunciante")
?>
<?
$maxRows_rsUsuarios = 9999; //Aqui é o limite de resultados que deseja, se colocar 10 serão apresentados somente os 10 primeiros (ou últimos dependendo da forma que definir) resultados.

$pageNum_rsUsuarios = 0; // Se precisar paginar sugiro pesquisar um pouco mais sobre isso para fazer de forma adequada ou fazer uma nova pergunta no site.

if (isset($_GET['pageNum_rsUsuarios'])) {

  $pageNum_rsUsuarios = $_GET['pageNum_rsUsuarios'];

}

$startRow_rsUsuarios = $pageNum_rsUsuarios * $maxRows_rsUsuarios;

$sql = "SELECT * FROM Anunciante ORDER BY id desc";

$executar = mysql_query($sql);

while( $exibir = mysql_fetch_array($executar)){
<img src="<? echo $foto; ?>" width="100"/>
echo $exibir['nome_exibido'];
echo "</br>";
echo $exibir['servico'];
echo "</br>";
echo "</br><hr>";

}
?>


</html>
<!-- fim Conteúdo -->
<?php include 'footer.php'; ?>