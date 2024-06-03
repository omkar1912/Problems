<?php 

function reverse($n){
    $reversedNumber = '';

    while($n > 0){
        $rem = $n % 10;
        $reversedNumber .= $rem;
        $n = (int)($n / 10);
    }
}