<?php
require_once ("model/PersonaModel.php");

class PersonaController {
    private $model;

    public function __construct() {
        $this->model = new PersonaModel();
    }

    public function listarPersonas() {
        $personas = $this->model->listarPersonas();
        require 'vista/lista_personas.php';
    }

    public function mostrarFormularioAgregar() {
        require 'vista/formulario_agregar.php';
    }

    public function agregarPersona($nombre, $edad) {
        $this->model->agregarPersona($nombre, $edad);
        header('Location: index.php?action=listar');
    }

    public function mostrarFormularioEditar($id) {
        $persona = $this->model->obtenerPersona($id);
        require 'vista/formulario_editar.php';
    }

    public function actualizarPersona($id, $nombre, $edad) {
        $this->model->actualizarPersona($id, $nombre, $edad);
        header('Location: index.php?action=listar');
    }

    public function eliminarPersona($id) {
        $this->model->eliminarPersona($id);
        header('Location: index.php?action=listar');
    }
}
?>