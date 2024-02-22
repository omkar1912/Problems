<?php

    // Pattern

    // *****
    // *   *
    // *   *
    // *   *
    // *   *
    // *****

    $lines = 6;
    $spaceCount = 0;
    $StarCount = 5;
    $star = 5;


    for($i = 0 ; $i < $lines ; $i++){
        for($j  = 0 ; $j < $star ; $j++){
            echo "*";
        }
        for($k = 0 ; $k < $spaceCount ; $k++){
            echo "&nbsp;";
        }
        if($i != 0 && $i != $lines-1){
            echo "*";
        }
        echo"<br/>";
        if($lines == 0 || $i == $lines - 2){
            $spaceCount = 0;
            $star = $StarCount;
        }
        else{
            $spaceCount = $StarCount-2;
            $star = 1;
        }
    }

    // for($i = 1; $i <= $lines ; $i++){
    //     if($i == 1 || $i == $lines){
    //         for($j = 1 ; $j <= $StarCount;$j++){
    //             echo"*";
    //             echo "&nbsp;";
    //         }
    //     }
    //     else{
    //         $spaceCount = 3;
    //         $starCount = 1;

    //         for($k = 1 ; $k <= $columns ; $k++){
    //             if($k == 1 || $k == $columns){
    //                 echo "*&nbsp";
    //             }
    //             else{
    //                 for($l = 1 ; $l <= $spaceCount ; $l++){
    //                     echo "&nbsp;";
    //                 }
    //             }
    //         }
    //     }
    //     echo "<br/>";
    // }