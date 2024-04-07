<?php 

    function isPrime($number){

        if($number <= 1){
            return false;
        }

        if($number == 2){
            return true;

        }

        if($number % 2 == 0){
            return false;
        }

        $limit = sqrt($number);
        
        for($i = 3 ; $i <= $limit ; $i++){
            if($number %  $i == 0) {
                return false;
            }
        }

        return true;

    }

    $number = 7;
    if(isPrime($number)){
        echo  "The number ".$number." is a prime number.";
    }
    else{
        echo  "The number ".$number." is a not prime number.";
    }