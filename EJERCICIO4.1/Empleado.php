<?php
require_once 'CommunityMember.php';

class Empleado extends CommunityMember {
    protected $empleadoId;

    public function __construct($nombre, $email, $empleadoId) {
        parent::__construct($nombre, $email);
        $this->empleadoId = $empleadoId;
    }

    public function getEmpleadoId() {
        return $this->empleadoId;
    }

    public function setEmpleadoId($empleadoId) {
        $this->empleadoId = $empleadoId;
    }

    public function __toString() {
        return parent::__toString() . ", ID Empleado: $this->empleadoId";
    }
}
?>
