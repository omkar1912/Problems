<?php

    // Pattern

    // *****
    // *   *
    // *   *
    // *   *
    // *   *
    // *****

    $lines = 10;
    $spaceCount = 0;
    $StarCount = 7;
    $columns = 7;

    for($i = 1; $i <= $lines ; $i++){
        if($i == 1 || $i == $lines){
            for($j = 1 ; $j <= $StarCount;$j++){
                echo"*";
                echo "&nbsp;";
            }
        }
        else{
            $spaceCount = 3;
            $starCount = 1;

            for($k = 1 ; $k <= $columns ; $k++){
                if($k == 1 || $k == $columns){
                    echo "*&nbsp";
                }
                else{
                    for($l = 1 ; $l <= $spaceCount ; $l++){
                        echo "&nbsp;";
                    }
                }
            }
        }
        echo "<br/>";
    }