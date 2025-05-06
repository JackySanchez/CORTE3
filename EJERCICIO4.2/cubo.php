<?php
require_once "formaTridimensional.php";

class Cubo extends FormaTridimensional {
    private float $lado;

    public function __construct(float $lado) {
        parent::__construct("Cubo");
        $this->lado = $lado;
    }

    public function getVolumen(): float {
        return pow($this->lado, 3);
    }

    public function getSuperficieArea(): float {
        return 6 * pow($this->lado, 2);
    }

    public function getArea(): float {
        return $this->getSuperficieArea();
    }
}
?>
