<?php 

$lines = 20;

$starCount = ($lines * 2) - 1;

$alphabets = range('A','Z');

$spaceCount = 0; 

for($i = 1 ; $i <= $lines ; $i++){
    for($j = 1 ; $j <= $spaceCount ; $j++){
        echo "&nbsp;&nbsp;&nbsp;" ;
    }
    for($k = 1 ; $k <= $starCount ; $k++){
        if($k == 1 || $k == $starCount || ($i == 1 || $i == $lines )){
            echo "*&nbsp;";
        }
        else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br/>";
    $spaceCount = $spaceCount + 1;
    $starCount = $starCount - 2;
}