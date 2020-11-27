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
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "db-payback;

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if ($mysqli->connect_errno) {
    echo "Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


?>
