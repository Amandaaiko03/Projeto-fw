<?php

$usuario = $_POST ["usuario"];
$senha = $_POST ["senha"];

include "../incluedes/conecta.php";

$sql = "SELECT * FROM cadastro WHERE usuario = $usuario and senha = $senha";
$res = mysqli_query($conn, $sql);

$qtdeRegistros = mysqli_num_rows($res);

session_start();
$row = mysqli_fetch_assoc($res);
$_SESSION ['usuario'] = $row ['usuario'];
$_SESSION [ 'senha'] = $row ['senha'];

if($qtdeRegistros > 0){
  header("location: ../homepage.php");
}
else {
  header("location : ../index.php");
}

 ?>