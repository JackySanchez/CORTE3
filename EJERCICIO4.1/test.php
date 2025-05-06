<?php
require_once 'Administrador.php';
require_once 'Maestro.php';
require_once 'Estudiante.php';
require_once 'Alumnos.php';
require_once 'Staff.php';

$administrador = new Administrador("Ana Ruiz", "ana@uni.edu", "EMP001", "Administración", "Decana");
$maestro = new Maestro("Carlos Pérez", "carlos@uni.edu", "EMP002", "Informática", "POO");
$estudiante = new Estudiante("Laura Gómez", "laura@uni.edu", "STU1001");
$alumnos = new Alumnos("Marco Díaz", "marco@egresado.com", 2018);
$staff = new Staff("Roberto Sánchez", "roberto@uni.edu", "EMP003", "Mantenimiento");
echo $staff . "<br>";

echo $administrador . "<br>";
echo $maestro . "<br>";
echo $estudiante . "<br>";
echo $alumnos . "<br>";
echo $staff . "<br>";
?>
