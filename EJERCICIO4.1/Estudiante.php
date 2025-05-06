<?php
require_once 'CommunityMember.php';

class Estudiante extends CommunityMember {
    protected $estudianteId;

    public function __construct($nombre, $email, $estudianteId) {
        parent::__construct($nombre, $email);
        $this->estudianteId = $estudianteId;
    }

    public function getEstudianteId() {
        return $this->estudianteId;
    }

    public function setEstudianteId($estudianteId) {
        $this->estudianteId = $estudianteId;
    }

    public function __toString() {
        return parent::__toString() . ", ID Estudiante: $this->estudianteId";
    }
}
?>
