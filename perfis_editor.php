<?php include 'proteger.php';?>
<?php include 'header.php'; ?>



<h2>  Bem vindo ao Painel, <?php echo $_SESSION['id_usuario']; ?>.</h2>

 <p>  <a href="sair.php">Sair</a>    </p>
 
<!-- Conteúdo -->
<html>



<?php
    $codigo = '';
    $nome = '';
    $sobrenome = '';
    $email = '';
    if(isset($_POST["button"])) {
        $codigo     = filter_var($_POST["codigo"], FILTER_VALIDATE_INT);
        $nome       = filter_var($_POST["nome"]);
        $sobrenome  = filter_var($_POST["sobrenome"]);
        $email      = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        $senha      = $_POST["senha"]; // Considere criptografar a senha antes de inserir no banco
        $csenha     = $_POST["csenha"];


        if ($email === false){
            echo "<script> alert('E-mail inválido!'); </script>";
            return true;
        }

        if($nome == "" || $sobrenome == "" || $email == "" ||  (empty($codigo) && ($senha == "" || $csenha == ""))) {
            echo "<script> alert('Preencha todos os campos!'); </script>";
            return true;
        }
        if ($senha != $csenha) {
            echo "<script> alert ('As senhas devem ser iguais!'); </script>";
            return true;
        }

        $erro = false;

        $select = $mysqli->query("SELECT * FROM usuarios WHERE Email='$email'");
        if($select) {
            $row = $select->num_rows;
            $f = $select->fetch_assoc();
            if($row > 0 && $codigo !== intval($f['codigo'])) {
                echo "<script> alert ('Já existe um usuário com esse e-mail'); </script>";
                $erro = true;
            } else {

                if (empty($codigo)) {
                    $insert = $mysqli->query("INSERT INTO `usuarios`(`nome`, `sobrenome`, `email`, `senha`) VALUES ('$nome', '$sobrenome', '$email', '$senha')");
                    if($insert) {
                        $codigo = $mysqli->insert_id;
                        if(empty($_GET['codigo'])) $_GET['codigo'] = $codigo;
                        echo "<script> alert ('Usuário registrado com sucesso!'); location.href='cadastrou.php' </script>";
                    } else {
                        $erro = true;
                        echo $mysqli->error;
                    }
                } else {
                    $sql  = "UPDATE `usuarios` SET 
                                `nome` = '$nome', 
                                `sobrenome` = '$sobrenome', 
                                `email` = '$email', 
                                `senha` = '$senha' 
                            WHERE
                                `codigo` = $codigo";
                    $update = $mysqli->query($sql);
                    if($update) {
                        echo "<script> alert ('Usuário atualizado com sucesso!'); location.href='cadastrou.php' </script>";
                    } else {
                        $erro = true;
                        echo $mysqli->error;
                    }
                }

            }
        } else {
            $erro = true;
            echo $mysqli->error;
        }

        if ($erro){
            $codigo     = '';
            $nome       = '';
            $sobrenome  = '';
            $email      = '';
            $senha      = '';
            $csenha     = '';
        }
    }


    if (!empty($_GET['codigo']) && filter_var($_GET['codigo'], FILTER_VALIDATE_INT)){
        $select = $mysqli->query("SELECT * FROM usuarios WHERE Email='$email'");
        if($select) {
            $row = $select->num_rows;
            $f = $select->fetch_assoc();
            if($row > 0) {
                $codigo     = $f['codigo'];
                $nome       = $f['nome'];
                $sobrenome  = $f['sobrenome'];
                $email      = $f['email'];
            }
        }
    }
?>
<body>
<form action="" method="POST">
    <input type="hidden" name="codigo" value="<?=$codigo?>">
    <label><br />
        Nome:
    </label><br />
    <input type="text" name="nome" placeholder="Primeiro Nome" value="<?=$nome?>" />
    <label><br />
        Sobrenome:
    </label><br />
        <input type="text" name="sobrenome" placeholder="Segundo Nome" value="<?=$sobrenome?>" />
    <label><br />
        Email:
    </label><br />
        <input type="text" name="email" placeholder="email@hotmail.com.br" value="<?=$email?>" />
    <label><br />
        Senha:
    </label><br />
        <input type="password" name="senha" placeholder="********" />
    <label><br />
        Confirmar Senha:
    </label><br />
    <input type="password" name="csenha" placeholder="********" /><br /><br />

    <input type="submit" value="Registrar" name="button" />
    <input type="reset" name="Redefinir" value="editar"/>
</form>
</body>
	

</html>
<!-- fim Conteúdo -->	
<?php include 'footer.php'; ?>



