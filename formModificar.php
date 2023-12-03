<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
</head>
<body>
<form action="" method="POST" name="modificarForm">
         <input type="hidden" name="desicion">
        <input type="hidden" name="idActual">
        <input type="hidden" name="idModificar">
        <input type="hidden" name="nombreModificar">
       
        <input type="hidden" name="artistaModificar">
       
        <input type="hidden" name="estiloModificar">
        
        <input type="hidden" name="añoModificar">
      
        <input type="hidden" name="numeroCancionesModificar">
  
        <input type="hidden" name="titulosModificar">
        
        <input type="hidden" name="cantidadModificar">
        
        <input type="hidden" name="precioModificar">
       
        <input type="hidden" name="descuentoModificar">
        
        <input type="hidden" name="ivaModificar">
        
</form>
<?php 


if(isset($_POST['idActual'])){
 $decision = $_POST['desicion'];
 $idActual =  $_POST['idActual'];
 $nombreModificar = $_POST['nombreModificar'];

$artistaModificar = $_POST['artistaModificar'];
$EstiloMusicalDVD = $_POST['estiloModificar'];
$anio = $_POST['añoModificar'];
$numeroCancionesdvd =  $_POST['numeroCancionesModificar'];
$tituloCanciones = $_POST['titulosModificar'];
$cantidadDiscos = $_POST['cantidadModificar'];
 $precioUnitario =  $_POST['precioModificar'];
$descuentodisco = $_POST['descuentoModificar'];
echo $ivadisco = $_POST['ivaModificar'];





$host = "localhost";
$user = 'root';
$pass = '';
$db   = 'bbdd_mabc_music';
$tabla = 'tb_mabc_dvds';



$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo "Error en la conexión: " . $conn->connect_errno . "-" . $conn->connect_error;
} else{
        echo "se a decidido actualizar el campo actual";
}


switch($decision){
        case "nombredvd":
                $sqlUpdate = "UPDATE $tabla SET NombreDVD='$nombreModificar' WHERE ID_DVD='$idActual'"; 

                break;
        case "artistadvd":
                $sqlUpdate = "UPDATE $tabla SET ArtistaDVD='$artistaModificar' WHERE ID_DVD='$idActual'"; 
                break;
        case "estilomusicaldvd":
                $sqlUpdate = "UPDATE $tabla SET EstiloMusicalDVD='$EstiloMusicalDVD' WHERE ID_DVD='$idActual'"; 
                break;
        case "añodvd":
                $sqlUpdate = "UPDATE $tabla SET AñoDVD='$anio' WHERE ID_DVD='$idActual'"; 
        case "numerocancionesdvd":
                $sqlUpdate = "UPDATE $tabla SET NumeroCancionesDVD='$numeroCancionesdvd' WHERE ID_DVD='$idActual'"; 
                break;
        case "tituloscancionesdvd":
                $sqlUpdate = "UPDATE $tabla SET TitulosCancionesDVD='$tituloCanciones' WHERE ID_DVD='$idActual'"; 
                break;
        case "cantidaddvd":
                $sqlUpdate = "UPDATE $tabla SET CantidadDVD='$$cantidadDiscos' WHERE ID_DVD='$idActual'"; 
                break;
        case "preciodvd":
                $sqlUpdate = "UPDATE $tabla SET PrecioDVD='$precioUnitario' WHERE ID_DVD='$idActual'"; 
                break;
        case "descuentodvd";
                $sqlUpdate = "UPDATE $tabla SET DescuentoDVD='$descuentodisco' WHERE ID_DVD='$idActual'"; 
                break;
        case "ivadvd":
                $sqlUpdate = "UPDATE $tabla SET IVADVD='$ivadisco' WHERE ID_DVD='$idActual'"; 
                break;

}

if ($conn->query($sqlUpdate) === TRUE) {
        echo "se ha realizado la insercion correctamente";
    } else {
        echo "Error: " .  $sqlUpdate . "<br>" . $conn->error;
    }


}




?>   
</body>
</html>
