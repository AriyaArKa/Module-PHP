<?php

echo "Enter units total consumed: ";
$units = (int) readline();

// $5 per unit for first 100 units
if ($units <= 100) 
{
    $bill = $units * 5; 
} 
// $10 per unit for 101–200 units
elseif ($units <= 200) 
{
    $bill = 100 * 5 + ($units - 100) * 10; 
} 
else 
{
    $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15; 
}
echo "Total bill: $$bill\n";