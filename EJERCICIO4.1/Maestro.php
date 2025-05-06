<?php
require_once 'Facultad.php';

class Maestro extends Facultad {
    private $sujeto;

    public function __construct($nombre, $email, $empleadoId, $departamento, $sujeto) {
        parent::__construct($nombre, $email, $empleadoId, $departamento);
        $this->sujeto = $sujeto;
    }

    public function getSujeto() {
        return $this->sujeto;
    }

    public function setSujeto($sujeto) {
        $this->sujeto = $sujeto;
    }

    public function __toString() {
        return parent::__toString() . ", Asignatura: $this->sujeto";
    }
}
?>
