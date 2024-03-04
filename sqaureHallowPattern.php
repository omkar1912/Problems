<?php

$lines = 5;

// $starCount = $lines;

// $initialPoint = 1;

// $lastPoint = $lines;

//$spaceCount;

for($i = 1; $i <= $lines ; $i++){
    for($j = 1; $j <= $lines ; $j++){
        if(($i == 1 || $j == 1) || ($i == $lines || $j == $lines)){
            echo "*&nbsp;&nbsp;";
        }
        else{
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br/>";
}