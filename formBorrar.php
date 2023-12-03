<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="" method="POST" name="recogeId">
    <input type="hidden" name="idBorrar"/>
</form>
<?php 
if(isset( $_POST['idBorrar'])){
    $idBorrar = $_POST['idBorrar'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'bbdd_mabc_music';
    $tabla = 'tb_mabc_dvds';
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        echo "Error en la conexión:" . $conn->connect_errno . "-" . $conn->connect_error;
    }

    $sqlBorrar = "DELETE FROM $tabla WHERE ID_DVD =  $idBorrar";
    $result_insert = $conn->query( $sqlBorrar);
    if ($result_insert) {
        echo "Registro borrado correctamente";
        } else {
            echo "Error al borrar el registro: " . $conn->error;
            }
            
}

?>
</body>
</html>
