<?php
class PersonaModel {
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli('186.3.139.231', 'userJP', 'J4p0n2024', 'db_appweb');
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function listarPersonas() {
        $query = "SELECT * FROM personas";
        $result = $this->conexion->query($query);
        $personas = [];
        while ($row = $result->fetch_assoc()) {
            $personas[] = $row;
        }
        return $personas;
    }

    public function agregarPersona($nombre, $edad) {
        $query = "INSERT INTO personas (nombre, edad) VALUES ('$nombre', $edad)";
        return $this->conexion->query($query);
    }

    public function obtenerPersona($id) {
        $query = "SELECT * FROM personas WHERE id=$id";
        $result = $this->conexion->query($query);
        return $result->fetch_assoc();
    }

    public function actualizarPersona($id, $nombre, $edad) {
        $query = "UPDATE personas SET nombre='$nombre', edad=$edad WHERE id=$id";
        return $this->conexion->query($query);
    }

    public function eliminarPersona($id) {
        $query = "DELETE FROM personas WHERE id=$id";
        return $this->conexion->query($query);
    }

    public function __destruct() {
        $this->conexion->close();
    }
}
?>