<?php

define("FACTOR", 9/5);
define("OFFSET", 32);

echo "Enter temperature value: ";
$temperature = (float) readline();

echo "Convert to (F: Fahrenheit, C: Celsius): ";
$choice = readline();

switch ($choice) 
{
    case 'F':
        $result = $temperature * FACTOR + OFFSET;
        echo "Temperature in Fahrenheit: $result\n";
        break;
    case 'C':
        $result = ($temperature - OFFSET) / FACTOR;
        echo "Temperature in Celsius: $result\n";
        break;
    default:
        echo "Invalid choice!\n";
        break;
}