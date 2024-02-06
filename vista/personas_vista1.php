<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre y edad</title>
</head>
<body>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Edad</td>
        </tr>
        <?php
            foreach($datos as $dato)
            {
                echo "<tr><<td>".$dato['nombre']."</td><td>".$dato["edad"]."</td></tr>";
            }
        ?>

    </table>
</body>
</html>