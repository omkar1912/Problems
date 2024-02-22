<?php

//Pattern
// 1
// 12
// 123
// 1234
// 12345

$number = 1;
$lines = 5;
$num = 1;

for($i = 1 ; $i <= $lines ; $i++){
    for($j = 1 ; $j <= $number; $j++){
        echo $num++;
    }
    echo "<br/>";
    $number++;
    $num = 1;

}

