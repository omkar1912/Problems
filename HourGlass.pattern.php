<?php 

$lines = 7;

$starCount = 4;

$spaceCount = 0;

$mid = ($lines + 1) / 2;

//Lines

for($i = 1 ; $i <= $lines ; $i++){
    //For space Count 

    for($j = 1 ; $j <= $spaceCount ; $j++){
        echo "&nbsp;&nbsp;";
    }

    //for StarCount

    for($k = 1; $k <= $starCount ; $k++){
        echo "*&nbsp;&nbsp;";
    }

    echo "<br/>";
    //Managing Space And Star

    if($i >= $mid){
        $starCount = $starCount + 1;
        $spaceCount = $spaceCount - 1;
    }

    else{
        $starCount = $starCount - 1;
        $spaceCount = $spaceCount + 1;
    }
}

