<?php include 'header.php'; ?>
<!-- Conteúdo -->
<html>

<?php
require ("conector.php");
?>

	<div id="cadastro">
    	<form name="cadastro" method="post" enctype="multipart/form-data" action="validarcadastro.php">
    		<table id="tab_cadastro">
            	<tr>    
                    <td>Foto:</td>
                    <td><input type="file" name="foto" required placeholder="Foto do usuario" id="foto" class="txt" /></td>
                </tr>
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
                    <td>biogragia:</td>
                    <td><input type="text" name="biografia" required placeholder="biografia usuario" id="biografia" class="txt" /></td>
                </tr>
                <tr>    
                    <td>cidade:</td>
                    <td><input type="text" name="cidade" required placeholder="cidade usuario" id="cidade" class="txt" />
                    <select name="cidade">
                    <option value="Manhuaçu">Manhuaçu</option>
                    <option value="Manhumirim">Manhumirim</option>
                    <option value="Simonesia">Simonesia</option>
                    </select>
                </td>
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
                    <td>Senha:</td>
                    <td><input type="text" name="senhacd" required placeholder="Senha cadastro" id="senhacd" class="txt" /></td>
                </tr>
                <td>  Confirmar Senha:</td>
                <tr> </label><br />
                <td> <input type="password" name="csenha" placeholder="********" /></td>
                 </tr>
                <!-- Conteúdo https://rafaelcouto.com.br/upload-simples-de-imagem-com-php-mysql/-->
                <tr>    
                    <td colspan="2"><input type="submit" value="Cadastrar" name="cadastrar" id="botao_cad"></td>
                </tr>
            </table>
        </form>
    </div>
	
</html>

<!-- fim Conteúdo -->		
<?php include 'footer.php'; ?>

<?php
    if(isset($_POST["button"])) {
        $nome       = $_POST["nome"];
        $nomeexibido  = $_POST["nomeexibido"];
        $email      = $_POST["email"];
        $senha      = $_POST["senhacd"];
        $csenha     = $_POST["csenha"];

        $biografia = $_POST['biografia'];
         $cidade = $_POST['cidade'];
          $servico = $_POST['servico'];
         $telefone = $_POST['telefone'];
        $foto = $_FILES['foto'];

        if($nome == "" || $sobrenome == "" || $email == "" || $senha == "" || $csenha == "") {
            echo "<script> alert('Preencha todos os campos!'); </script>";
            return true;
        }
        if ($senha != $csenha) {
            echo "<script> alert ('As senhas devem ser iguais!'); </script>";
            return true;
        }   

        $select = $mysqli->query("SELECT * FROM usuarios WHERE Email='$email'");
        if($select) {
        $row = $select->num_rows;
        if($row > 0) {
            echo "<script> alert ('Já existe um usuário com esse e-mail'); </script>";
        } else {
            $insert = $mysqli->query("INSERT INTO `usuarios`(`nome`, `sobrenome`, `email`, `senha`) VALUES ('$nome', '$sobrenome', '$email', '$senha')");
        if($insert) {
            echo "<script> alert ('Usuário registrado com sucesso!'); location.href='cadastrou.php' </script>";
        }   else {
                echo $mysqli->error;
            }   
        }
    }   else{
    echo $mysqli->error;

    }   

}       
?>