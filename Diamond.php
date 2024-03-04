<?php

$lines = 7 ;

$starCount = 1; 

$spaceCount = 3;

$mid = ($lines+1)/2;

for($i = 1 ; $i <= $lines ; $i++){
    //for space Count

    for($j = 1 ; $j <= $spaceCount ; $j++){
        echo "&nbsp;&nbsp;";
    }

    //for Star Count
    for($k = 1 ;$k <= $starCount ; $k++){
        echo "*&nbsp;&nbsp;";
    }

    echo "<br/>";

    if($i >= $mid){
        $spaceCount = $spaceCount + 1;
        $starCount = $starCount - 1;
    }else{
        $spaceCount = $spaceCount - 1;
        $starCount = $starCount + 1;
    }
    
}