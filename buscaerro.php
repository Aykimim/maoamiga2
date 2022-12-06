
<?php include('conector.php'); ?>
<?php
if (!isset($_GET['nome'])) {
	header("Location: index.php");
	exit;
}
 
$nome = "%".trim($_GET['nome'])."%";
 

 
$sth = $dbh->prepare('SELECT * FROM `Anunciante` WHERE `nome` LIKE :nome');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();
 
$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
 
<h2>Resultado da busca</h2>
<?php
if (count($resultados)) {
	foreach($resultados as $Resultado) {
?>
<label><?php echo $Resultado['id']; ?> - <?php echo $Resultado['nome']; ?></label>
<br>
<?
} } else {
?>
<label>Não foram encontrados resultados pelo termo buscado.</label>
<?php
}
?>
