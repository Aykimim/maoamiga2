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

// Se o usuário clicou no botão cadastrar efetua as ações
if (isset($_POST['cadastrar'])) {
// Recupera os dados dos campos
$nome = $_POST['nome'];
$nomeexibido = $_POST['nomeexibido'];
$senhacd = $_POST['senhacd'];
$email = $_POST['email'];
$biografia = $_POST['biografia'];
$cidade = $_POST['cidade'];
$servico = $_POST['servico'];
$telefone = $_POST['telefone'];
$foto = $_FILES['foto'];

  // Se a foto estiver sido selecionada
  if (!empty($foto["name"])) {
        
     // Largura máxima em pixels
     $largura = 150;
     // Altura máxima em pixels
     $altura = 180;
     // Tamanho máximo do arquivo em bytes
     $tamanho = 1000;
     $error = array();
     // Verifica se o arquivo é uma imagem
     if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
         $error[1] = "Isso não é uma imagem.";
         } 
 
     // Pega as dimensões da imagem
     $dimensoes = getimagesize($foto["tmp_name"]);
 
     // Verifica se a largura da imagem é maior que a largura permitida
     if($dimensoes[0] > $largura) {
         $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
     }
     // Verifica se a altura da imagem é maior que a altura permitida
     if($dimensoes[1] > $altura) {
         $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
     }
     
     // Verifica se o tamanho da imagem é maior que o tamanho permitido
     if($foto["size"] > $tamanho) {
             $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
     }
     // Se não houver nenhum erro
     if (count($error) == 0) {
     
         // Pega extensão da imagem
         preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
         // Gera um nome único para a imagem
         $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
         // Caminho de onde ficará a imagem
         $caminho_imagem = "fotosperfis/" . $nome_imagem;
         // Faz o upload da imagem para seu respectivo caminho
         move_uploaded_file($foto["tmp_name"], $caminho_imagem);
     
         // Insere os dados no banco
         $sql = mysql_query("INSERT INTO Anunciante VALUES ('', '".$nome."', '".$nomeexibido."', '".$senhacd."', '".$email."', '".$biografia."', '".$cidade."', '".$servico."', '".$foto."', '".$nome_imagem."')");
        
         // Se os dados forem inseridos com sucesso
         if ($sql){
             echo "Você foi cadastrado com sucesso.";
         }
     }
 
     // Se houver mensagens de erro, exibe-as
     if (count($error) != 0) {
         foreach ($error as $erro) {
             echo $erro . "<br />";
         }
     }
 }
}
?>

</body>




		
</html>
		
	<?php include 'footer.php'; ?>
     </nav>

</body>
</html>





<!-- Conteúdo 
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
-->