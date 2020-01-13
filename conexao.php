<?php //conexao.php

$server = "localhost";
$user   = "root";
$pass   = "";
$bd     = "bdaluno";

$con = mysqli_connect($server,$user,$pass,$bd);

if(!$con) {
    echo "Não conectou ao BD";
}
?>