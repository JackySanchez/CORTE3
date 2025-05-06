<?php
require_once 'CommunityMember.php';

class Alumnos extends CommunityMember {
    private $AñoGraduacion;

    public function __construct($nombre, $email, $AñoGraduacion) {
        parent::__construct($nombre, $email);
        $this->AñoGraduacion = $AñoGraduacion;
    }

    public function getAñoGraduacion() {
        return $this->AñoGraduacion;
    }

    public function setAñoGraduacion($año) {
        $this->AñoGraduacion = $año;
    }

    public function __toString() {
        return parent::__toString() . ", Año de Graduación: $this->AñoGraduacion";
    }
}
?>
