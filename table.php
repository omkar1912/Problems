<?php

$lines = 5 ;
$result = 1;
$multiplier = 1;

for($i = 1 ; $i <= $lines ; $i++){
    $result = $i;
    for($j = 1 ; $j <= $i ; $j++){
        echo $result;
        echo "&nbsp;";

        $result = $result * $i;
    }
    echo "<br/>";
}