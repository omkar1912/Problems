<?php 

function prinTable($n){
    $result= '';
    for($i = 1 ; $i <= 10; $i++){
        $result .= $n * $i."\t";
    }

    return $result;
}

echo prinTable(5);