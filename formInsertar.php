<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" name="insertarDatos">
    <input type="hidden" name="nombreDvd">
    <input type="hidden" name="artistaNombre">
    <input type="hidden" name="estiloMusica">
    <input type="hidden" name="anioCreacion">
    <input type="hidden" name="numeroCanciones">
    <input type="hidden" name="titulosCanciones">
    <input type="hidden" name="cantidadCanciones">
    <input type="hidden" name="precioCanciones">
    <input type="hidden" name="descuentoPrecio">
    <input type="hidden" name="ivaPrecio">
</form>
<?php 
if(isset($_POST['nombreDvd']) || isset($_POST['artistaNombre']) || isset($_POST['estiloMusica']) || isset($_POST['anioCreacion']) || isset($_POST['numeroCanciones']) || isset($_POST['titulosCanciones']) || isset($_POST['cantidadCanciones']) || isset($_POST['precioCanciones']) || isset($_POST['descuentoPrecio']) || isset($_POST['ivaPrecio'])){
 $insertNombreDvd = $_POST['nombreDvd'];
 $insertArtistaNombre =$_POST['artistaNombre'];
 $insertEstiloMusica = $_POST['estiloMusica'];
 $insertAnioCreacion = $_POST['anioCreacion'];
 $insertNumeroCanciones = $_POST['numeroCanciones'];
 $insertTitulosCanciones = $_POST['titulosCanciones'];
 $insertCantidadCanciones = $_POST['cantidadCanciones'];
 $insertPrecioCanciones = $_POST['precioCanciones'];
 $insertDescuentoPrecio = $_POST['descuentoPrecio'];
 $insertIvaPrecio = $_POST['ivaPrecio'];
    //habri conexion a base de datos 
    $host = "localhost";
    $user = 'root';
    $pass = '';
    $db   = 'bbdd_mabc_music';
    $tabla = 'tb_mabc_dvds';
    $conn = new mysqli($host, $user, $pass, $db);
//se realiza para que no afecte el texto a la base de datos
    $insertNombreDvd = mysqli_real_escape_string($conn, $insertNombreDvd);
    $insertArtistaNombre = mysqli_real_escape_string($conn, $insertArtistaNombre);
    $insertEstiloMusica = mysqli_real_escape_string($conn, $insertEstiloMusica);
    $insertAnioCreacion = mysqli_real_escape_string($conn, $insertAnioCreacion);
    $insertNumeroCanciones = mysqli_real_escape_string($conn, $insertNumeroCanciones);
    $insertTitulosCanciones = mysqli_real_escape_string($conn, $insertTitulosCanciones);
    $insertCantidadCanciones = mysqli_real_escape_string($conn, $insertCantidadCanciones);
    $insertPrecioCanciones = mysqli_real_escape_string($conn, $insertPrecioCanciones);
    $insertDescuentoPrecio = mysqli_real_escape_string($conn, $insertDescuentoPrecio);
    $insertIvaPrecio = mysqli_real_escape_string($conn, $insertIvaPrecio);
    //insertar datos en base de datos 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } else{
            echo "<p>Conexion establecida</p>";
            }
            $sql = "INSERT INTO  $tabla (NombreDVD, ArtistaDVD
            , EstiloMusicalDVD, AñoDVD, NumeroCancionesDVD
            , TitulosCancionesDVD, CantidadDVD, PrecioDVD
            , DescuentoDVD, IVADVD) VALUES ('$insertNombreDvd'
            , '$insertArtistaNombre', '$insertEstiloMusica'
            , '$insertAnioCreacion', '$insertNumeroCanciones'
            , '$insertTitulosCanciones', '$insertCantidadCanciones'
            , '$insertPrecioCanciones', '$insertDescuentoPrecio'
            , '$insertIvaPrecio')";
            if ($conn->query($sql) === TRUE){
                echo "Nuevo registro creado exitosamente";
                }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
}
?>
</body>
</html>