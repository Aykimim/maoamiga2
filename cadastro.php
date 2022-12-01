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
require ("conector.php");
?>

<body>
	<div id="cadastro">
    	<form name="cadastro" method="post" enctype="multipart/form-data" action="validarcadastro.php">
    		<table id="tab_cadastro">
            	<tr>
                	<td>Nome:</td>
                    <td><input type="text" name="nome" required placeholder="Nome" id="nome" class="txt" /></td>
                </tr>
                <tr>
                	<td>Nome exibido:</td>
                    <td><input type="text" name="nomeexibido" required placeholder="Nome a ser mostrado" id="nomeexibido" class="txt" /></td>
                </tr>
                <tr>    
                    <td>E-mail:</td>
                    <td><input type="text" name="email" required placeholder="E-mail do Funcionário" id="email" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Senha:</td>
                    <td><input type="text" name="senhacd" required placeholder="Senha cadastro" id="senhacd" class="txt" /></td>
                </tr>
                <tr>    
                    <td>biogragia:</td>
                    <td><input type="text" name="biografia" required placeholder="biografia usuario" id="biografia" class="txt" /></td>
                </tr>
                <tr>    
                    <td>cidade:</td>
                    <td><input type="text" name="cidade" required placeholder="cidade usuario" id="cidade" class="txt" /></td>
                </tr>
                <tr>    
                    <td>telefone:</td>
                    <td><input type="text" name="telefone" required placeholder="telefone usuario" id="telefone" class="txt" /></td>
                </tr>
                <tr>    
                     <td>servico:</td>
                    <td><input type="text" name="servico" required placeholder="servico usuario" id="servico" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Foto:</td>
                    <td><input type="file" name="foto" required placeholder="Foto do usuario" id="foto" class="txt" /></td>
                </tr>
               
                <!-- Conteúdo https://rafaelcouto.com.br/upload-simples-de-imagem-com-php-mysql/-->
                <tr>    
                    <td colspan="2"><input type="submit" value="Cadastrar" name="cadastrar" id="botao_cad"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
		
	<?php include 'footer.php'; ?>
     </nav>

</body>
</html>
