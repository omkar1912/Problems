<?php


// *
// * **
// * ** ***



$starCount = 1;
$lines = 20;
$starCount = 1;
$space = 1;


for($i = 1; $i <=$lines; $i++){
    //error_log('i = '.$i);
    //FOr Space Count
    $count = 1;
    for($j = 1 ; $j <= $starCount; $j++){
        
        echo "*";

        if($space == $j){
            echo "&nbsp;";
            $count = $count + 1;
            error_log("{$space} + {$count} is ".$space);
            $space = $space + $count;
            

        }
    }

    echo "<br/>";
    $starCount = $starCount + $i + 1;
    $space = 1;
}




