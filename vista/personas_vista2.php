<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Nombres y Edades</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid #333;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            transition: background-color 0.3s ease;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
        </tr>
    </thead>
    <tbody>
    <?php
            foreach($datos as $dato)
            {
                echo "<tr><<td>".$dato['nombre']."</td><td>".$dato["edad"]."</td></tr>";
            }
        ?>
    </tbody>
</table>

</body>
</html>