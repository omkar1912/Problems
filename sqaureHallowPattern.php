<?php

$lines = 10;

$starCount = $lines;

$initialPoint = 1;

$lastPoint = $lines;

//$spaceCount;

for($i = 1; $i <= $lines ; $i++){
    for($j = 1; $j <= $starCount ; $j++){
        if(($i == $initialPoint || $i == $lastPoint) || ($j == $initialPoint || $j == $lastPoint)){
            echo "*";
        }
        else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br/>";
}