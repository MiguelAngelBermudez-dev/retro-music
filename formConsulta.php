<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<form action="" method="POST" name="formConsulta">
    <input type="hidden" name="nameConsulta"/>
</form>
<?php 

if(isset($_POST['nameConsulta'])){
    $consulta = $_POST['nameConsulta'];

//habri conexion a base de datos 
$host = "localhost";
$user = 'root';
$pass = '';
$db   = 'bbdd_mabc_music';
$tabla = 'tb_mabc_dvds';
$conn = new mysqli($host, $user, $pass, $db);
//insertar datos en base de datos 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

// Consulta SQL con condición WHERE
$sql = "SELECT * FROM tb_mabc_dvds WHERE NombreDVD =  '$consulta'";

$result = $conn->query($sql);
echo "<table id=\"bbdd\">";
echo "<tr><th>ID</th><th> NombreDVD </th><th> ArtistaDVD </th><th> EstiloMusicalDVD </th><th> AñoDVD </th><th> NumeroCancionesDVD </th><th> TitulosCancionesDVD </th><th> CantidadDVD </th><th> PrecioDVD </th><th> DescuentoDVD </th><th> IVADVD </th></tr>";
// Verificar si la consulta fue exitosa
if ($result) {
   // Procesar los resultados
   while ($row = $result->fetch_assoc()) {
       echo "<tr>";
       echo "<td>" . $row['ID_DVD'] . "</td>";
       echo "<td>" . $row["NombreDVD"] . "</td>";
       echo "<td>" . $row["ArtistaDVD"] . "</td>";
       echo "<td>" . $row["EstiloMusicalDVD"] . "</td>";
       echo "<td>" . $row["AñoDVD"] . "</td>";
       echo "<td>" . $row["NumeroCancionesDVD"] . "</td>";
       echo "<td>" . $row["TitulosCancionesDVD"] . "</td>";
       echo "<td>" . $row["CantidadDVD"] . "</td>";
       echo "<td>" . $row["PrecioDVD"] . "</td>";
       echo "<td>" . $row["DescuentoDVD"] . "</td>";
       echo "<td>" . $row["IVADVD"] . "</td>";
       echo "<td><a href=\"#\"  onclick=\"borrar(" . $row['ID_DVD'] . ");\">DEL</a> ____ <a href=\"#\" onclick=\" modificar(" . $row['ID_DVD'] . " ,'" . $row['NombreDVD'] . "', '" . $row['ArtistaDVD'] . "', '" . $row['EstiloMusicalDVD'] . "', '" . $row['AñoDVD'] . "', " . $row['NumeroCancionesDVD'] .",'". $row['TitulosCancionesDVD'] ."',". $row['CantidadDVD'] .",". $row['PrecioDVD'] .",". $row['DescuentoDVD'] .",". $row['IVADVD'] .")\">MDF</a>
       </td>";
       echo "</tr>";
   }
   echo "</table>";
} else {
   // Manejar el caso en que la consulta falla
   echo "Error en la consulta: " . $conn->error;
}

}
?>    




</body>
</html>