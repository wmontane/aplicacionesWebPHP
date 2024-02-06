<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Personas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid #ced4da;
            background-color: #fff;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ced4da;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e2e6ea;
        }
        .btn {
            padding: 8px 16px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            text-decoration: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Lista de Personas</h1>

<a href="index.php?action=formulario_agregar" class="btn" style="display:block; width:200px; text-align:center; margin:20px auto;">Agregar Persona</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($personas as $persona): ?>
        <tr>
            <td><?php echo $persona['id']; ?></td>
            <td><?php echo $persona['nombre']; ?></td>
            <td><?php echo $persona['edad']; ?></td>
            <td>
                <a href="index.php?action=formulario_editar&id=<?php echo $persona['id']; ?>" class="btn">Editar</a>
                <a href="index.php?action=eliminar&id=<?php echo $persona['id']; ?>" class="btn" style="background-color:#dc3545;">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
