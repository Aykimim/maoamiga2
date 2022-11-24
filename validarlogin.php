
<?php
 
include_once('conector.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = test_input($_POST["usuario"]);
    $password = test_input($_POST["senha"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['username'] == $username) &&
            ($user['password'] == $password)) {
                header("location: perfis editor.html");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
 
?>
//////////////////////////
https://www.devmedia.com.br/criando-sessao-para-login-no-php/27347
$dbname="kimmim21_maoamigaassis";
    $dbuser="kimmim21_eykimim";
    $dbpassword="pozinhomajicu18";

<?php

session_start();

$login = $_POST['usuario'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = mysql_connect("127.0.0.1", "root", "pozinhomajicu18") or die
 ("Sem conexão com o servidor");
$select = mysql_select_db("server") or die("Sem acesso ao DB, reclama com a Yasmim");

// A variavel $result pega as varias $login e $senha, faz uma
//pesquisa na tabela de usuarios
$result = mysql_query("SELECT * FROM `login`
WHERE `usuario` = '$login' AND `senha`= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
resultado ele redirecionará para a página site.php ou retornara  para a página
do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['usuario'] = $login;
$_SESSION['senha'] = $senha;
header('location:home.html');
}
else{
  unset ($_SESSION['usuario']);
  unset ($_SESSION['senha']);
  header('location:index.php');

  }
?>
