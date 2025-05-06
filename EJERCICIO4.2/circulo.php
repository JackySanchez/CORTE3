<?php
require_once 'formaBidimensional.php';

class Circulo extends FormaBidimensional {
    private float $radio;

    public function __construct(float $radio) {
        parent::__construct("Círculo");
        $this->radio = $radio;
    }

    public function getArea(): float {
        return pi() * pow($this->radio, 2);
    }

    public function getPerimetro(): float {
        return 2 * pi() * $this->radio;
    }
}
