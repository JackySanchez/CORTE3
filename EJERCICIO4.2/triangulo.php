<?php
require_once "FormaBidimensional.php";

class Triangulo extends FormaBidimensional {
    private float $base, $altura;

    public function __construct(float $base, float $altura) {
        parent::__construct("Triángulo");
        $this->base = $base;
        $this->altura = $altura;
    }

    public function getArea(): float {
        return 0.5 * $this->base * $this->altura;
    }

    public function getPerimetro(): float {
        return $this->base * 3; // Asumiendo equilátero
    }
}
?>