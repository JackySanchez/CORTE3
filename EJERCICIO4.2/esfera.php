<?php
require_once 'formaTridimensional.php';

class Esfera extends FormaTridimensional {
    private float $radio;

    public function __construct(float $radio) {
        parent::__construct("Esfera");
        $this->radio = $radio;
    }

    public function getVolumen(): float {
        return (4 / 3) * pi() * pow($this->radio, 3);
    }

    public function getSuperficieArea(): float {
        return 4 * pi() * pow($this->radio, 2);
    }

    public function getArea(): float {
        return $this->getSuperficieArea();
    }
}
