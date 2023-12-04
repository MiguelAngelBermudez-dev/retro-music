<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <form action="" method="POST" name="forOrdenado">
        <input type="hidden" name="ordenarId" />
    </form>
    <?php
    if (isset($_POST['ordenarId'])) {

            $host = "localhost";
            $user = 'root';
            $pass = '';
            $db   = 'bbdd_mabc_music';
            $tabla = 'tb_mabc_dvds';
            $conn = new mysqli($host, $user, $pass, $db);
            $sql = "SELECT * FROM $tabla ORDER BY ID_DVD";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                echo "<table id=\"bbdd\">";
                echo "<tr><th>ID</th><th> NombreDVD </th><th> ArtistaDVD </th><th> EstiloMusicalDVD </th><th> AñoDVD </th><th> NumeroCancionesDVD </th><th> TitulosCancionesDVD </th><th> CantidadDVD </th><th> PrecioDVD </th><th> DescuentoDVD </th><th> IVADVD </th></tr>";

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
                    echo "<td><a href=\"#\"  onclick=\"borrar(" . $row['ID_DVD'] . ");\">DEL</a> ____ <a href=\"#\" onclick=\" modificar(" . $row['ID_DVD'] . " ,'" . $row['NombreDVD'] . "', '" . $row['ArtistaDVD'] . "', '" . $row['EstiloMusicalDVD'] . "', '" . $row['AñoDVD'] . "', " . $row['NumeroCancionesDVD'] . ",'" . $row['TitulosCancionesDVD'] . "'," . $row['CantidadDVD'] . "," . $row['PrecioDVD'] . "," . $row['DescuentoDVD'] . "," . $row['IVADVD'] . ")\">MDF</a>
        </td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "No hay resultados";
            }
        }
    ?>
</body>

</html>