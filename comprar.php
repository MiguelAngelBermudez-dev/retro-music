<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <form action="" method="POST" name="formcompra">
        <input type="hidden" name="compra" />
        <input type="hidden" name="nombrecomprador" />
        <input type="hidden" name="datoscomprador" />
    </form>
    <?php

    if (isset($_POST['compra'])) {
        //variable de decision
        $comprador = $_POST['nombrecomprador'];
        $datosCompra = $_POST['datoscomprador'];
        $valorDeCompra = $_POST['compra'];
        //variables de conexion
        $host = "localhost";
        $user = 'root';
        $pass = '';
        $db   = 'bbdd_mabc_music';
        $tablaventas = 'tb_mabc_ventas';
        $tablaDVD = 'tb_mabc_dvds';
        $conn = new mysqli($host, $user, $pass, $db);
        //insertar datos en base de datos 
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        switch ($valorDeCompra) {
            case "michael":
                $nombreEspecifico = 41;

                $sqlDVD = "SELECT * FROM $tablaDVD WHERE ID_DVD = '$nombreEspecifico' LIMIT 1";

                $result = $conn->query($sqlDVD);

                if ($result === false) {

                    die("Error en la consulta SQL: " . $conn->error);
                }

                if ($result->num_rows > 0) {

                    $row = $result->fetch_assoc();
                    $idTransaccion = $row['ID_DVD'];
                    $PrecioTransaccion = $row["PrecioDVD"];

                    $sqlInsertar = "INSERT INTO $tablaventas (ID_DVD, NombreCliente, DatosCliente, PrecioVenta) VALUES ('$idTransaccion', '$comprador', '$datosCompra', '$PrecioTransaccion')";

                    $insertResult = $conn->query($sqlInsertar);

                    if ($insertResult === false) {

                        die("Error al insertar en la tabla de ventas: " . $conn->error);
                    } else {
                        echo "Transacción realizada con éxito.";
                    }
                } else {

                    echo "No se encontraron registros para el nombre específico '$nombreEspecifico'.";
                }

                $valorDeCompra = ""; //reseteo valor del switch
                break;

            case "queen":
               
                $nombreEspecifico = 45;

                $sqlDVD = "SELECT * FROM $tablaDVD WHERE ID_DVD = '$nombreEspecifico' LIMIT 1";

                $result = $conn->query($sqlDVD);

                if ($result === false) {

                    die("Error en la consulta SQL: " . $conn->error);
                }
                if ($result->num_rows > 0) {

                    $row = $result->fetch_assoc();
                    $idTransaccion = $row['ID_DVD'];
                    $PrecioTransaccion = $row["PrecioDVD"];

                    $sqlInsertar = "INSERT INTO $tablaventas (ID_DVD, NombreCliente, DatosCliente, PrecioVenta) VALUES ('$idTransaccion', '$comprador', '$datosCompra', '$PrecioTransaccion')";

                    $insertResult = $conn->query($sqlInsertar);

                    if ($insertResult === false) {

                        die("Error al insertar en la tabla de ventas: " . $conn->error);
                    }
                } else {

                    echo "No se encontraron registros para el nombre específico '$nombreEspecifico'.";
                }
                $valorDeCompra = "";
                break;
            case "fortunate":
              
                $nombreEspecifico = 46;

                $sqlDVD = "SELECT * FROM $tablaDVD WHERE ID_DVD = '$nombreEspecifico' LIMIT 1";

                $result = $conn->query($sqlDVD);

                if ($result === false) {

                    die("Error en la consulta SQL: " . $conn->error);
                }
                if ($result->num_rows > 0) {

                    $row = $result->fetch_assoc();
                    $idTransaccion = $row['ID_DVD'];
                    $PrecioTransaccion = $row["PrecioDVD"];

                    $sqlInsertar = "INSERT INTO $tablaventas (ID_DVD, NombreCliente, DatosCliente, PrecioVenta) VALUES ('$idTransaccion', '$comprador', '$datosCompra', '$PrecioTransaccion')";

                    $insertResult = $conn->query($sqlInsertar);

                    if ($insertResult === false) {

                        die("Error al insertar en la tabla de ventas: " . $conn->error);
                    }
                } else {

                    echo "No se encontraron registros para el nombre específico '$nombreEspecifico'.";
                }
                $valorDeCompra = "";
                break;

            case "dire":
                
                $nombreEspecifico = 50;

                $sqlDVD = "SELECT * FROM $tablaDVD WHERE ID_DVD = '$nombreEspecifico' LIMIT 1";

                $result = $conn->query($sqlDVD);

                if ($result === false) {

                    die("Error en la consulta SQL: " . $conn->error);
                }

                if ($result->num_rows > 0) {

                    $row = $result->fetch_assoc();
                    $idTransaccion = $row['ID_DVD'];
                    $PrecioTransaccion = $row["PrecioDVD"];

                    $sqlInsertar = "INSERT INTO $tablaventas (ID_DVD, NombreCliente, DatosCliente, PrecioVenta) VALUES ('$idTransaccion', '$comprador', '$datosCompra', '$PrecioTransaccion')";

                    $insertResult = $conn->query($sqlInsertar);

                    if ($insertResult === false) {

                        die("Error al insertar en la tabla de ventas: " . $conn->error);
                    }
                } else {

                    echo "No se encontraron registros para el nombre específico '$nombreEspecifico'.";
                }
                $valorDeCompra = "";
                break;
            case "beatles":
                $nombreEspecifico = 51;

                $sqlDVD = "SELECT * FROM $tablaDVD WHERE ID_DVD = '$nombreEspecifico' LIMIT 1";

                $result = $conn->query($sqlDVD);

                if ($result === false) {

                    die("Error en la consulta SQL: " . $conn->error);
                }

                if ($result->num_rows > 0) {

                    $row = $result->fetch_assoc();
                    $idTransaccion = $row['ID_DVD'];
                    $PrecioTransaccion = $row["PrecioDVD"];

                    $sqlInsertar = "INSERT INTO $tablaventas (ID_DVD, NombreCliente, DatosCliente, PrecioVenta) VALUES ('$idTransaccion', ' $comprador', '$datosCompra', '$PrecioTransaccion')";

                    $insertResult = $conn->query($sqlInsertar);

                    if ($insertResult === false) {

                        die("Error al insertar en la tabla de ventas: " . $conn->error);
                    }
                } else {

                    echo "No se encontraron registros para el nombre específico '$nombreEspecifico'.";
                }
                $valorDeCompra = "";
                break;
            case "free":
                $nombreEspecifico = 52;

                $sqlDVD = "SELECT * FROM $tablaDVD WHERE ID_DVD = '$nombreEspecifico' LIMIT 1";

                $result = $conn->query($sqlDVD);

                if ($result === false) {

                    die("Error en la consulta SQL: " . $conn->error);
                }
                if ($result->num_rows > 0) {

                    $row = $result->fetch_assoc();
                    $idTransaccion = $row['ID_DVD'];
                    $PrecioTransaccion = $row["PrecioDVD"];

                    $sqlInsertar = "INSERT INTO $tablaventas (ID_DVD, NombreCliente, DatosCliente, PrecioVenta) VALUES ('$idTransaccion', ' $comprador', '$datosCompra', '$PrecioTransaccion')";

                    $insertResult = $conn->query($sqlInsertar);

                    if ($insertResult === false) {

                        die("Error al insertar en la tabla de ventas: " . $conn->error);
                    }
                } else {

                    echo "No se encontraron registros para el nombre específico '$nombreEspecifico'.";
                }
                $valorDeCompra = "";
                break;
        }
    }
    ?>
</body>

</html>