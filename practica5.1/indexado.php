<?php
// Declaración del arreglo indexado de colores
$colores = [ "Rosa", "AzulCielo", "VerdeAqua", "Amarillo", "Morado"];
echo "<hr/>";

// Mostrar todos los colores usando foreach
echo "Colores: ";
echo "<hr/>";
foreach ($colores as $index => $color) {
        echo $index . ")" . $color . "<br/>";
    }
    echo "<hr/>";
// Mostrar primer y último color
echo "\nPrimer color: " . $colores[0];
echo "<hr/>";
echo "\nÚltimo color: " . $colores[count($colores) - 1];
echo "<hr/>";
// Mostrar cantidad total de colores
echo "\nCantidad total de colores: " . count($colores);
echo "<hr/>";
?>
