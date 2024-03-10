<?php 

function checkArmstrong($number){
    $sum = 0; 

    $temp = $number;

    while($number > 0){
        $a = $number % 10;
        $number = $number/10;
        
        $sum = $sum + ($a*$a*$a);
    }

    if($temp == $sum){
        echo "Is a armstrong number";
    }

    else{
        echo "Is not a armstrong number";
    }
    
}

echo checkArmstrong(153);