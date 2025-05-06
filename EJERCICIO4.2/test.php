
<?php
require_once "circulo.php";
require_once "triangulo.php";
require_once "Cuadrilatero.php";
require_once "cuadrado.php";
require_once "esfera.php";
require_once "Tetraedro.php";
require_once "cubo.php";

// Figuras 2D
$circulo = new Circulo(5);
echo $circulo->getNombre() . ":<br>";
echo "Área: " . $circulo->getArea() . "<br>";
echo "Perímetro: " . $circulo->getPerimetro() . "<br>";

$triangulo = new Triangulo(6, 4);
echo $triangulo->getNombre() . ":<br>";
echo "Área: " . $triangulo->getArea() . "<br>";
echo "Perímetro: " . $triangulo->getPerimetro() . "<br>";

$cuadrado = new Cuadrilatero(2, 3, 4, 5);
echo $cuadrado->getNombre() . ":<br>";
echo "Perímetro: " . $cuadrado->getPerimetro() . "<br>";

$cuadrado = new Cuadrado(4);
echo $cuadrado->getNombre() . ":<br>";
echo "Área: " . $cuadrado->getArea() . "<br>";
echo "Perímetro: " . $cuadrado->getPerimetro() . "<br>";

// Figuras 3D
$esfera = new Esfera(5);
echo $esfera->getNombre() . ":<br>";
echo "Volumen: " . $esfera->getVolumen() . "<br>";
echo "Área superficial: " . $esfera->getSuperficieArea() . "<br>";

$tetraedro = new Tetraedro(3);
echo $tetraedro->getNombre() . "<br>";
echo "Volumen: " . $tetraedro->getVolumen() . "<br>";
echo "Área superficial: " . $tetraedro->getSuperficieArea() . "<br>";

$cubo = new Cubo(4);
echo $cubo->getNombre() . ":<br>";
echo "Volumen: " . $cubo->getVolumen() . "<br>";
echo "Área superficial: " . $cubo->getSuperficieArea() . "<br>";
?>
