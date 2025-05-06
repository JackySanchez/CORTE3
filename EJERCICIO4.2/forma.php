<?php
abstract class Forma {
    protected string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    abstract public function getArea(): float;
    public function getNombre(): string {
        return $this->nombre;
    }
}
