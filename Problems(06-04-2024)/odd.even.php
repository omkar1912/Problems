<?php 

    function oddEven($number){
        if($number  % 2 == 0) {
            return true;
        }
        else{
            return false;
        }
    }

    $n = 8;
    $result = oddEven($n);

    if($result){
        echo "The number is: ".$n. " and it is a even number";
    }
    else{
        echo "The number is: ".$n. " and it is a odd number";
    }