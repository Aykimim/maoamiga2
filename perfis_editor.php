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
<!-- Conteúdo -->

<?php
// ID de exemplo
$id = 1;
// Selecionando nome da foto do usuário
$sql = mysql_query("SELECT foto FROM Anunciante WHERE id = '".$id."'");
$usuario = mysql_fetch_object($sql);
// Removendo usuário do banco de dados
$sql = mysql_query("DELETE FROM Anunciante WHERE id = '".$id."'");
// Removendo imagem da pasta fotos/
unlink("fotosperfis/".$usuario->foto."");
?>


		
</html>
		
	<?php include 'footer.php'; ?>
     </nav>

</body>
</html>
