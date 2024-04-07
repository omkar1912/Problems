<?php 
    function sumOfDigits($number){
        $sum = 0;
        
        



        while($number != 0){
            echo "Sum is ".$sum." and Number is ".$number."\n";
            $sum += ($number*3);

            $number = (int)($number/10);
        }

        return $sum;
    }

    echo sumOfDigits(153);