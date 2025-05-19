<?php
echo "<hr/>";
// Declaración del arreglo asociativo de usuario
$usuario = [ "Nombre" => "Jacky", "Edad" => 18, "Email" => "JackySanchez@email.com", "Carrera" => "Ingeniería Informática"];
// Mostrar cada campo
echo "Nombre: " . $usuario["Nombre"] . "\n";
echo "Edad: " . $usuario["Edad"] . "\n";
echo "Email: " . $usuario["Email"] . "\n";
echo "Carrera: " . $usuario["Carrera"] . "\n";
// Cambiar la edad a 22
$usuario["Edad"] = 22;
// Agregar nuevo campo "activo"
$usuario["activo"] = true;
echo "<hr/>";
// Mostrar arreglo completo
echo "Arreglo completo: ";
print_r($usuario);
echo "<hr/>";
?>