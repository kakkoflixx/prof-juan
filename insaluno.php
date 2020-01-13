<?php
include "conexao.php";

$aluno  = $_POST['aluno'];
$mat    = $_POST['matricula'];
$mensa  = $_POST['mensalidade'];

echo "Nome do aluno {$aluno}<br>";
echo "Matrícula:  {$mat}<br>";
echo "Mensalidade {$mensa}<br>";

$sql = "insert into aluno(aluno,matricula,mensalidade)
 values ('$aluno','$mat','$mensa')";

$qry = mysqli_query($con,$sql);
?>
