<?php

$lines = 10;

// $starCount = $lines;

// $initialPoint = 1;

// $lastPoint = $lines;

//$spaceCount;

for($i = 1; $i <= $lines ; $i++){
    for($j = 1; $j <= $lines ; $j++){
        if(($i == 1 || $j == 1) || ($i == $lines || $j == $lines)){
            echo "*";
        }
        else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br/>";
}