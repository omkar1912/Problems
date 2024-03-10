<?php 

function descendingOrderOfArray($array){
    for($i =0 ; $i < count($array); $i++){
        for($j = 0 ; $j < count($array) - 1 ; $j++){
            if($array[$j] < $array[$j + 1]){
                $temp = $array[$j+1];
                $array[$j+1] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo json_encode($array);
}

echo descendingOrderOfArray([1,8,3,5,9,2,6]);