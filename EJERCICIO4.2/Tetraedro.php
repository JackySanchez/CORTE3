<?php
require_once "FormaTridimensional.php";

class Tetraedro extends FormaTridimensional {
    private float $arista;

    public function __construct(float $arista) {
        parent::__construct("Tetraedro");
        $this->arista = $arista;
    }

    public function getVolumen(): float {
        return (pow($this->arista, 3)) / (6 * sqrt(2));
    }

    public function getSuperficieArea(): float {
        return sqrt(3) * pow($this->arista, 2);
    }

    public function getArea(): float {
        return $this->getSuperficieArea();
    }
}
?>