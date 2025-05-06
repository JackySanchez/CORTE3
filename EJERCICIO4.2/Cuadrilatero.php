<?php
require_once "formaBidimensional.php";

class Cuadrilatero extends formaBidimensional {
    protected float $lado1, $lado2, $lado3, $lado4;

    public function __construct(float $a, float $b, float $c, float $d) {
        parent::__construct("Cuadrilátero");
        $this->lado1 = $a;
        $this->lado2 = $b;
        $this->lado3 = $c;
        $this->lado4 = $d;
    }

    public function getArea(): float {
        return 0.0; // General
    }

    public function getPerimetro(): float {
        return $this->lado1 + $this->lado2 + $this->lado3 + $this->lado4;
    }
}
?>