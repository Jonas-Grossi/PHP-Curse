<?php
include_once("conectar.php");
$pesquisa = $_POST['cidade'];

$sql = "SELECT * FROM Usuarios WHERE cidade ='$pesquisa'";
$resultado = mysqli_query($strcon,$sql);
while($registro = mysqli_fetch_array(($resultado))){
$nome = $registro['endereco'];
$cidade = $registro['cidade'];

echo"<tr>";
echo "<td>".$nome."</td>";
echo "<td>".$endereco."</td>";
echo "<td>".$cidade."</td>";
echo "</tr>";

}
mysqli_close($strcon);
echo"</table>";



?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Pesquisa por Cidade</title>
    <style></style>
</head>
<body>
<table border="1" style='width:50%'>
<tr>
<th>NOME</th>
<th>ENDERECO</th>
<th>CIDADE</th>

</tr>

</table>


</body>
</html>