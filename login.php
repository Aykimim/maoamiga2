<?php include 'header.php'; ?>
<!-- Conteúdo -->

 <!-- Carregar as sessões para a memória... -->
 <?php include('conector.php'); ?>
 
 <?php
if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM Anunciante WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_usuario'] = $usuario['id_usuario'];
           // $_SESSION['nome'] = $usuario['nome'];

            header("Location: index.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
 
 <!-- formulario -->
 	

	<h1>LOGIN</h1></br>
    <form action="" method="post">
	

	    <label>Email : </label>
	    <input type="text" name="usuario" id="usuario"  /><br />
	
	    <label>Senha :</label>
     	<input type="password" name="senha" id="senha" /><br />
	
	     <button type="submit">Entrar</button>


    </form>
	

 	
<!--fim Conteúdo -->
<?php include 'footer.php'; ?>