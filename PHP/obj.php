
<?php 

$conn = mysqli_connect ("localhost", "root", "", "atp");

if($conn == false) {
  die("ERRO: não foi possivel conectar ao MySQL" . mysqli_connect_error());
}


$sql = "SELECT item FROM item novo";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
echo " <tr>
<th>". $row ['item'] ."</th>
<th>". $row ['Diária'] ."</th>
<th>". $row ['prazo'] ."</th>
</tr>

<tr>
<td>". $row ['bike'] ."</td>
<td>". $row ['10'] ."</td>
<td>". $row ['2022'] ."</td>
</tr>

<tr>
<td>". $row ['decoração'] ."</td>
<td>". $row ['5'] ."</td>
<td>". $row ['12'] ."</td>
</tr>";
}
?>
