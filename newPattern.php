<?php


// *
// * **
// * ** ***



$starCount = 1;
$lines = 10;
$space = 1;


for($i = 1; $i <=$lines; $i++){
    $count = 1;
    for($j = 1 ; $j <= $starCount; $j++){
        echo "*";
        if($space == $j){
            echo "&nbsp;";
            $count = $count + 1;
            $space = $space + $count;
            error_log('Space is '. $space);
        }
    }

    echo "<br/>";
    $starCount = $starCount + $i + 1;
    $space = 1;
}




