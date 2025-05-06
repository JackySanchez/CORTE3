<?php
require_once "Cuadrilatero.php";

class Cuadrado extends Cuadrilatero {
    private float $lado;

    public function __construct(float $lado) {
        parent::__construct($lado, $lado, $lado, $lado);
        $this->lado = $lado;
        $this->nombre = "Cuadrado";
    }

    public function getArea(): float {
        return pow($this->lado, 2);
    }
}
?>