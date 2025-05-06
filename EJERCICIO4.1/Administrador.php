<?php
require_once 'Facultad.php';

class Administrador extends Facultad {
    private $posicion;

    public function __construct($nombre, $email, $empleadoId, $departamento, $posicion) {
        parent::__construct($nombre, $email, $empleadoId, $departamento);
        $this->posicion = $posicion;
    }

    public function getPosicion() {
        return $this->posicion;
    }

    public function setPosicion($position) {
        $this->posicion = $position;
    }

    public function __toString() {
        return parent::__toString() . ", Cargo: $this->posicion";
    }
}
?>
