<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
<form action="" method="POST" name="formPrecioTotal">
    <input type="hidden" name="PrecioTotal"/>
</form>

<?php 
if(isset($_POST['PrecioTotal'])){

    $host = "localhost";
    $user = 'root';
    $pass = '';
    $db   = 'bbdd_mabc_music';
    $tablaVentas = 'tb_mabc_Ventas';
    
    $conn = new mysqli($host, $user, $pass, $db);
    
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    try {
        // Inicia la transacción
        $conn->begin_transaction();
    
        // Consulta para obtener el total de las ventas
        $sql = "SELECT SUM(PrecioVenta) AS TotalVentas FROM $tablaVentas";
        $result = $conn->query($sql);
    
        // Verificar si la consulta fue exitosa
        if ($result) {
            // Procesar los resultados
            $row = $result->fetch_assoc();
            $totalVentas = $row['TotalVentas'];
            echo "<table id=\"bbdd\">";
            echo "<tr><th>IPrecio Total</th><th></tr>";
            echo "<tr><th>" . $totalVentas."€</th></tr>";

            echo "</table>";
        } else {
            throw new Exception("Error en la consulta: " . $conn->error);
        }
    
        // Commit si todas las consultas son exitosas
        $conn->commit();
    } catch (Exception $e) {
        // Rollback en caso de error
        $conn->rollback();
        echo "Error en la transacción: " . $e->getMessage();
    }








}




?>



</body>
</html>