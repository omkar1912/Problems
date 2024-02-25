<?php 

    $lines = 20;

    $starCount = 1;
    

    $spaceCount = $lines - 1;
    
    for($i = 1 ; $i <= $lines ; $i++){
        for($j = 1 ; $j <= $spaceCount ; $j++){
            echo "&nbsp;&nbsp;";
        }
        for($k = 1 ; $k <= $starCount ; $k++){
            echo "*";
            echo "&nbsp;&nbsp;";
        }
        echo "<br>";
        $starCount = $starCount + 1;
        $spaceCount = $spaceCount - 1;
    }