<?php
require_once 'classes/employee.php';

$empleado1 = new Employee("Duarte", 5999);
$empleado2 = new Employee("Antonella", 6000);
$empleado3 = new Employee("Marieta", 6001);

$empleado1->print();
echo "\n";
$empleado2->print();
echo "\n";
$empleado3->print();

?>