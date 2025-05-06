<?php
require_once 'Empleado.php';

class Staff extends Empleado {
    private $area;

    public function __construct($nombre, $email, $empleadoId, $area) {
        parent::__construct($nombre, $email, $empleadoId);
        $this->area = $area;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function __toString() {
        return parent::__toString() . ", Área: {$this->area}";
    }
}
?>
