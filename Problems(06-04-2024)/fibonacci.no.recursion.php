<?php 

function fibonacci($n){
    $n1 = 0;
    $n2 = 1;

    $i = 0;

    while ($i < $n){
        if($i == 0){
            echo "0\n";
        }

        elseif($i == 1){
            echo "1\n";
        }
        else{
            $fib = $n1 + $n2;

            $n1 = $n2;
            $n2 = $fib;

            echo "$fib\n";
        }
        $i++;

    }
}

fibonacci(10);