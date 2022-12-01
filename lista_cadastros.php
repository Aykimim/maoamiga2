<?php include 'header.php'; ?>
<!-- Conteúdo -->
<html>

<?php
require ("conector.php");
?>
<?
$maxRows_rsUsuarios = 9999; //Aqui é o limite de resultados que deseja, se colocar 10 serão apresentados somente os 10 primeiros (ou últimos dependendo da forma que definir) resultados.

$pageNum_rsUsuarios = 0; // Se precisar paginar sugiro pesquisar um pouco mais sobre isso para fazer de forma adequada ou fazer uma nova pergunta no site.

if (isset($_GET['pageNum_rsUsuarios'])) {

  $pageNum_rsUsuarios = $_GET['pageNum_rsUsuarios'];

}

$startRow_rsUsuarios = $pageNum_rsUsuarios * $maxRows_rsUsuarios;



mysql_select_db($database_conexaomural, $conexaomural);

$query_rsUsuarios = "SELECT * FROM perfis ORDER BY id DESC"; //Aqui eu defini a ordem por ID - ou seja, ordem que as páginas foram criadas - sendo que pode colocar a ordem do mais novo para mais antigo ou o inverso (DESC ou ASC). Assim está o mais novo primeiro ok. Você pode ordenar por nome em ordem alfabetica também, fazendo assim (ORDER BY usuario ASC)

$query_limit_rsUsuarios = sprintf("%s LIMIT %d, %d", $query_rsUsuarios, $startRow_rsUsuarios, $maxRows_rsUsuarios);

$rsUsuarios = mysql_query($query_limit_rsUsuarios, $conexaomural) or die(mysql_error());

$row_rsUsuarios = mysql_fetch_assoc($rsUsuarios);



if (isset($_GET['totalRows_rsUsuarios'])) {

  $totalRows_rsUsuarios = $_GET['totalRows_rsUsuarios'];

} else {

  $all_rsUsuarios = mysql_query($query_rsUsuarios);

  $totalRows_rsUsuarios = mysql_num_rows($all_rsUsuarios);

}

$totalPages_rsUsuarios = ceil($totalRows_rsUsuarios/$maxRows_rsUsuarios)-1;



$queryString_rsUsuarios = "";

if (!empty($_SERVER['QUERY_STRING'])) {

  $params = explode("&", $_SERVER['QUERY_STRING']);

  $newParams = array();

  foreach ($params as $param) {

    if (stristr($param, "pageNum_rsUsuarios") == false && 

        stristr($param, "totalRows_rsUsuarios") == false) {

      array_push($newParams, $param);

    }

  }

  if (count($newParams) != 0) {

    $queryString_rsUsuarios = "&" . htmlentities(implode("&", $newParams));

  }

}

$queryString_rsUsuarios = sprintf("&totalRows_rsUsuarios=%d%s", $totalRows_rsUsuarios, $queryString_rsUsuarios);
?>


</html>
<!-- fim Conteúdo -->
<?php include 'footer.php'; ?>