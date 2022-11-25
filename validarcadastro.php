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
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<!-- Conteúdo -->

<body>
<?php
require ("conector.php");
?>

<?php

$nome = $_POST['nome'];
$nomeexibido = $_POST['nomeexibido'];
$senhacd = $_POST['senhacd'];
$email = $_POST['email'];
$biografia = $_POST['biografia'];
$cidade = $_POST['cidade'];
$servico = $_POST['servico'];
$telefone = $_POST['telefone'];
$foto = $_POST['foto'];

$sql = "INSERT INTO funcionarios (nome, email, nomeexibido, senhacd, biografia, cidade, servico, telefone, foto) 
        VALUES (:nome, :email, :nomeexibido, :senhacd, :biografia, :cidade, :servico, :telefone, :foto)
";

$stmt = $conexao->prepare($sql);

$params = array(
    ':nome' => $nome, 
    ':email' => $email,  
    ':nomeexibido'=> $nomeexibido,
    ':senhacd'=> $senhacd, 
    ':biografia'=> $biografia,
    ':cidade' => $cidade,
    ':servico'=> $servico,
    ':telefone'=> $telefone,
    ':foto' => $foto

);

$stmt->execute($params);

echo "<script>
          alert('sucesso.');
      </script>
      <meta http-equiv='refresh' content='0, url=perfil.php'>
";
?>
</body>
</html>



		
</html>
		
	<?php include 'footer.php'; ?>
     </nav>

</body>
</html>