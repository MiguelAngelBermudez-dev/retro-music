<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<form action="" method="POST" name="formProductosxClien">
        <input type="hidden" name="clientes" />
    </form>

<?php 
if(isset($_POST['clientes'])){
    $clienteAconsultar = $_POST['clientes'];

    $host = "localhost";
    $user = 'root';
    $pass = '';
    $db   = 'bbdd_mabc_music';
    $tablaVentas = 'tb_mabc_Ventas';
    $tablaDVDs = 'tb_mabc_dvds';
    
    $conn = new mysqli($host, $user, $pass, $db);
    
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    try {
        // Inicia la transacción
        $conn->begin_transaction();
    
        // Consulta para obtener los artículos adquiridos por un cliente específico
        $sql = "SELECT v.ID_Ventas, v.ID_DVD, d.NombreDVD, v.NombreCliente, v.DatosCliente, v.PrecioVenta
                FROM $tablaVentas v
                JOIN $tablaDVDs d ON v.ID_DVD = d.ID_DVD
                WHERE v.NombreCliente = '$clienteAconsultar'";
        $result = $conn->query($sql);
    
        // Verificar si la consulta fue exitosa
        if ($result) {
            echo "<table id=\"bbdd\">";
            echo "<tr><th>ID_Ventas</th><th>ID_DVD</th><th>NombreDVD</th><th>NombreCliente</th><th>DatosCliente</th><th>PrecioVenta</th></tr>";
    
            // Procesar los resultados
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['ID_Ventas'] . "</td>";
                echo "<td>" . $row['ID_DVD'] . "</td>";
                echo "<td>" . $row['NombreDVD'] . "</td>";
                echo "<td>" . $row['NombreCliente'] . "</td>";
                echo "<td>" . $row['DatosCliente'] . "</td>";
                echo "<td>" . $row['PrecioVenta'] . "</td>";
                echo "</tr>";
            }
    
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