<?php 
require_once 'Docente.php'; 
require_once 'Alumno.php'; 

$docente1 = new Docente("Rodrigo", "Ojeda", "Ortiz", 45, "Sistemas", "M.C.", 15); 
$docente2 = new Docente("AnaMaria", "Vargas", "Martinez", 38, "Matemáticas", "Dr.", 10); 
$alumno1 = new Alumno("Cristina", "Lira", "Sosa", 20, "Sistemas", 9.3, 5); 
$alumno2 = new Alumno("Gretel", "Dias", "Sanchez", 19, "Matemáticas", 9.7, 3); 

// Mostrar información de los docentes
echo $docente1->obtenerNombreCompleto() . "<br>";
echo "ID: " . $docente1->getId() . "<br>";
echo "Antigüedad: " . $docente1->getAntiguedad() . " años<br><br>";

echo $docente2->obtenerNombreCompleto() . "<br>";
echo "ID: " . $docente2->getId() . "<br>";
echo "Antigüedad: " . $docente2->getAntiguedad() . " años<br><br>";

// Mostrar información de los alumnos
echo $alumno1->obtenerNombreCompleto() . "<br>";
echo "ID: " . $alumno1->getId() . "<br>";
echo "Promedio: " . $alumno1->getPromedio() . "<br>";
echo "Semestre: " . $alumno1->getSemestre() . "<br><br>";

echo $alumno2->obtenerNombreCompleto() . "<br>";
echo "ID: " . $alumno2->getId() . "<br>";
echo "Promedio: " . $alumno2->getPromedio() . "<br>";
echo "Semestre: " . $alumno2->getSemestre() . "<br><br>";
///////////////////////////////////////////////////////////////////////////////////////////
// Crear 2 nuevos docentes y 2 nuevos alumnos
$docente3 = new Docente("Luis", "Gomez", "Salazar", 40, "Biología", "M.A.", 8);
$docente4 = new Docente("María", "Pérez", "López", 50, "Química", "Dr.", 20);

$alumno3 = new Alumno("Carlos", "Reyes", "Hernández", 22, "Físicas", 8.5, 4);
$alumno4 = new Alumno("Isabel", "Martínez", "Fernández", 21, "Economía", 9.1, 6);

// Mostrar la información de los nuevos docentes
echo "Información de los nuevos docentes:<br><br>";

echo $docente3->obtenerNombreCompleto() . "<br>";
echo "ID: " . $docente3->getId() . "<br>";
echo "Antigüedad: " . $docente3->getAntiguedad() . " años<br><br>";

echo $docente4->obtenerNombreCompleto() . "<br>";
echo "ID: " . $docente4->getId() . "<br>";
echo "Antigüedad: " . $docente4->getAntiguedad() . " años<br><br>";

// Mostrar la información de los nuevos alumnos
echo "Información de los nuevos alumnos:<br><br>";

echo $alumno3->obtenerNombreCompleto() . "<br>";
echo "ID: " . $alumno3->getId() . "<br>";
echo "Promedio: " . $alumno3->getPromedio() . "<br>";
echo "Semestre: " . $alumno3->getSemestre() . "<br><br>";

echo $alumno4->obtenerNombreCompleto() . "<br>";
echo "ID: " . $alumno4->getId() . "<br>";
echo "Promedio: " . $alumno4->getPromedio() . "<br>";
echo "Semestre: " . $alumno4->getSemestre() . "<br><br>";
?>
