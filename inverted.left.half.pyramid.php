<?php
    $lines = $starCount = 10; 

    $spaceCount = 0;

    for($i = 1 ; $i <= $lines ; $i++){
        for($j = 1 ; $j <= $spaceCount ; $j++){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        for($k = 1 ; $k <= $starCount ; $k++){
            echo "*&nbsp;&nbsp;";
        }

        echo "<br/>";
        $starCount = $starCount - 1 ;
        $spaceCount = $spaceCount + 1;
    }

?>