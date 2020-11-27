<?php

//Begin Really Simple SSL Load balancing fix
if (
    (isset($_ENV["HTTPS"]) && "on" == $_ENV["HTTPS"]) ||
    (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false) ||
    (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false) ||
    (isset($_SERVER["HTTP_CF_VISITOR"]) && strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false) ||
    (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false) ||
    (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false) ||
    (isset($_SERVER["HTTP_X_PROTO"]) && strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false)
) {
    $_SERVER["HTTPS"] = "on";
} ?>








<?php
$titulo = $_POST['titulo'];
$host = "localhost";
$user = "root";
$senha = "";
$database = "dbmylinkbio";

($con = mysqli_connect($host, $user, $senha, $database)) or die("Erro de Conexão");

//$titulo = "Exemplo";

$atualizar_titulo = "UPDATE textos SET titulo = '$titulo' WHERE id = 1";
$atualizar_1 = mysqli_query($con, $atualizar_titulo);
?>


<?php
$descricao = $_POST['descricao'];
$host = "localhost";
$user = "root";
$senha = "";
$database = "dbmylinkbio";

($con = mysqli_connect($host, $user, $senha, $database)) or die("Erro de Conexão");

//$titulo = "Exemplo";

$atualizar_descricao = "UPDATE textos SET descricao = '$descricao' WHERE id = 1";
$atualizar_2 = mysqli_query($con, $atualizar_descricao);
?>


<?php
$link = $_POST['link'];
$host = "localhost";
$user = "root";
$senha = "";
$database = "dbmylinkbio";

($con = mysqli_connect($host, $user, $senha, $database)) or die("Erro de Conexão");

//$titulo = "Exemplo";

$atualizar_link = "UPDATE textos SET link = '$link' WHERE id = 1";
$atualizar_3 = mysqli_query($con, $atualizar_link);
?>




<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
<h3>Atualizado com Sucesso!</h3>

<a href="index.php" target="blank" style="color:black"><h3>Visualizar Página</h3></a>


<script>
    document.write('<a href="' + document.referrer + '">Retornar</a>');
</script>   
</body>
</html>