<?php

$starCount = 1; 

$lines = 10;

for( $i = 1 ; $i <= $lines ; $i++){
    for($j = 1 ; $j <= $starCount ; $j++){
        echo "*";
        echo "&nbsp;&nbsp;&nbsp;";
    }

    echo "<br/>";
    $starCount = $starCount + 1;
}