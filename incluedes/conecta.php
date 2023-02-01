<?php
$conn = mysqli_connect ("localhost", "root", "", "atp");

if($conn == false) {
    die("ERRO: não foi possivel conectar ao MySQL" . mysqli_connect_error());
}
?>