<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
<form action="" method="POST" name="formMayorventa">
    <input type="hidden" name="mayorventa"/>
</form>
<?php 
if(isset($_POST['mayorventa'])){

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
    
        // Consulta para obtener el producto más vendido
        $sql = "SELECT v.ID_DVD, d.NombreDVD, SUM(v.ID_Ventas) AS TotalVendido
            FROM $tablaVentas v
            JOIN $tablaDVDs d ON v.ID_DVD = d.ID_DVD
            GROUP BY v.ID_DVD, d.NombreDVD
            ORDER BY TotalVendido DESC
            LIMIT 1";
        $result = $conn->query($sql);
    
        // Verificar si la consulta fue exitosa
        if ($result) {
            echo "<table id=\"bbdd\">";
            echo "<tr><th>ID_DVD</th><th>Mas vendido</th></tr>";
    
            // Procesar los resultados
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['ID_DVD'] . "</td>";
                echo "<td>" . $row['NombreDVD'] . "</td>";
               
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