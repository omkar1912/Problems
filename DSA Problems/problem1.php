<?php 

//The Result we want [0,1,0,1,1,0,1,1,1,0,1,1,1,1]

class Pattern {
    function problem1($nums){
        $j = 0 ; $k = 2;
        $array1 = [];
        for($i = 0 ; $i < $nums ; $i++){
            if($i == $j){
                array_push( $array1 , 0);
                $j = $j + $k;
                $k++;
            }
            else{
                array_push($array1,1);
            }
        }

        echo(json_encode($array1));
    }
}

$obj = new Pattern();

$obj->problem1(14);