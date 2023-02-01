<?php

$conn = mysqli_connect ("localhost","root","", "atp");

if($conn == false) {
    die("ERRO: não foi possivel conectar ao MySQL" . mysqli_connect_error());
}

$senha = $_POST ['senha'];

$sql = "INSERT INTO senha (usuario,senha) VALUES ('$senha')";

$res = mysqli_query( $conn, $sql);
if($res){
        header("location: ../index.php");
}
else {
    echo "ERRO";
}



?>