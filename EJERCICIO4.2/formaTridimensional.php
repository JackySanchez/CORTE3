<?php
require_once 'forma.php';

abstract class FormaTridimensional extends Forma {
    abstract public function getVolumen(): float;
    abstract public function getSuperficieArea(): float;
}
