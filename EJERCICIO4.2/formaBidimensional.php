<?php
require_once 'forma.php';

abstract class FormaBidimensional extends Forma {
    abstract public function getPerimetro(): float;
}
