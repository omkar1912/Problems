<?php

$lines = 4;

$spaceCount =$lines - 1 ;

$count = 1;

for($i = 1; $i <= $lines ; $i++){
    for($j = 1 ; $j <= $spaceCount ; $j++){
        echo "&nbsp;";
    }

    for($k = 1 ; $k <= $count; $k++){
        echo "{$i}";
        echo "&nbsp;";
    }
    echo "<br/>";
    $spaceCount = $spaceCount-1;
    $count = $count+1;
}