<?php 

//Define the function 

function isArmstrong($number){
    //Define the Variables
    $sum = 0;

    $originalNumber = $number;

    //Calculte the number of digits;

    $numDigits = strlen(strval($number));

    while($number > 0){
        $digit = $number % 10;

        $sum += pow($digit,$numDigits);

        $number = $number/10;
    }

    if($sum == $originalNumber){
        return "$originalNumber is a armstrong number";
    }else{
        return "$originalNumber is not a armstrong Number";
    }
}

echo isArmstrong(407);