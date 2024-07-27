<?php

$n1 = 10 ;

$n2 = 20;

$temp = '';

$temp = $n1;

$n1 = $n2; 

$n2 = $temp;

echo($n1);

echo $n2;

$num1 = 15;
$num2 = 27;

$temp;  // Declare the temporary variable

// Swap logic
$temp = $num1;
$num1 = $num2;
$num2 = $temp;

// Display the swapped values
echo "Number 1 after swapping: $num1\n";
echo "Number 2 after swapping: $num2\n";