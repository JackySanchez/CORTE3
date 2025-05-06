<?php
require_once 'Empleado.php';

class Facultad extends Empleado {
    protected $departamento;

    public function __construct($nombre, $email, $empleadoId, $departamento) {
        parent::__construct($nombre, $email, $empleadoId);
        $this->departamento = $departamento;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function __toString() {
        return parent::__toString() . ", Departamento: $this->departamento";
    }
}
?>
