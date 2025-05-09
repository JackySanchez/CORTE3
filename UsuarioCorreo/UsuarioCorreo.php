<?php 
abstract class UsuarioCorreo { 
 private static $contadorID = 1; 
 private $id; 
 protected $nombre; 
 protected $apellidoPaterno; 
 protected $apellidoMaterno; 
 protected $edad; 
 protected $departamento; 
 public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad,  $departamento) { 
 $this->id = self::$contadorID++; 
 $this->nombre = $nombre; 
 $this->apellidoPaterno = $apellidoPaterno; 
 $this->apellidoMaterno = $apellidoMaterno; 
 $this->edad = $edad; 
 $this->departamento = $departamento; 
 } 
 public function setNombre($nuevoNombre) { 
 $this->nombre = $nuevoNombre; 
 } 
 public function setEdad($nuevaEdad) { 
 $this->edad = $nuevaEdad; 
 } 
 public function setDepartamento($nuevoDepartamento) { 
 $this->departamento = $nuevoDepartamento; 
 } 
 public function getID() { 
 return $this->id; 
 } 
 public function getEdad() { 
 return $this->edad; 
 } 
 public function getDepartamento() { 
 return $this->departamento; 
 } 
 // Método abstracto para forzar que las clases hijas lo implementen  abstract public function obtenerNombreCompleto(); 
abstract public function obtenerNombreCompleto(); 
} 
?>