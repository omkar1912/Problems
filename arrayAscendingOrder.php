<?php

function ascendingOrderOfArray($array){
    $temp =0;
    echo "The Given Array is <br/>";
    echo json_encode($array);
    // As Array Index start from 0 so we are starting the for loop from 0
    for($i = 0 ; $i < count($array) - 1; $i++){
        for ($j = 0 ; $j < count($array) - 1;$j++){
            if($array[$j] > $array[$j+1]){
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp; 
            }
        }
    }
    echo "<br/>The Ascending Order Of the Given Array is <br/>";
    echo json_encode($array);
}

echo ascendingOrderOfArray([1,8,9,4,6,7,3]);