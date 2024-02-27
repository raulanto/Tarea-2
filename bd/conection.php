<?php
class ConexionBD {
    private $servidor;
    private $usuario;
    private $password;
    private $base_datos;
    private $conexion;

    public function __construct($servidor, $usuario, $password, $base_datos) {
        $this->servidor = $servidor;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->base_datos = $base_datos;
    }

    public function conectar() {
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->password, $this->base_datos);
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
        $this->conexion->set_charset("utf8");
    }

    public function ejecutar($sql) {
        $stmt = $this->conexion->query($sql);
        return $stmt;
    }

    public function obtener_fila($stmt, $fila) {
        if ($fila == 0) {
            $array = $stmt->fetch_array();
        } else {
            $stmt->data_seek($fila);
            $array = $stmt->fetch_array();
        }
        return $array;
    }

    public function lastID() {
        return $this->conexion->insert_id;
    }
}
?>
