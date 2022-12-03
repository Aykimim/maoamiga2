<?php include 'header.php'; ?>
<!-- Conteúdo -->
<html>



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
<!-- fim Conteúdo -->	
<?php include 'footer.php'; ?>



<!--deleta foto-->
<? 
   include ("conexao.php");
   $acao     = $_REQUEST['acao'];   
   $id_foto  = $_REQUEST['id-foto'];
 
   if (isset($acao) && $acao == 'excluir-foto' ){
      $del_foto = "DELETE FROM fotos WHERE id_fotos = '$id_foto'";
      $sucesso = mysql_query($del_foto);
 
      if ($sucesso){
         header("Location: ".$_SERVER['HTTP_REFERER']."");
      }else
         die (mysql_error());
?>