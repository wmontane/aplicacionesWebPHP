<?php
require_once 'controlador/PersonaController.php';

$controller = new PersonaController();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'agregar':
        $controller->agregarPersona($_POST['nombre'], $_POST['edad']);
        break;
    case 'formulario_agregar':
        $controller->mostrarFormularioAgregar();
        break;
    case 'formulario_editar':
        $controller->mostrarFormularioEditar($_GET['id']);
        break;
    case 'actualizar':
        $controller->actualizarPersona($_GET['id'], $_POST['nombre'], $_POST['edad']);
        break;
    case 'eliminar':
        $controller->eliminarPersona($_GET['id']);
        break;
    case 'listar':
    default:
        $controller->listarPersonas();
}
?>