<?php 

$lines = 10;

$starCount = $lines - 1;

$spaceCount = 0;

for($i = 1 ; $i <= $lines ; $i++){
    for($j = 1 ; $j <= $spaceCount ; $j++){
        echo "&nbsp;";
    }

    for($k = 1 ; $k <= $starCount ; $k++){
        echo "*&nbsp;";
    }

    echo "<br/>";
    $spaceCount = $spaceCount + 1;
}