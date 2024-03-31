<?php 
function printImprovedPattern($n){
    error_log("Program started");
    //Initilize the variables
    $numberOfLines = $n;
    $numberOfValuesPerLines = $n * $n;
    $valueToPrint = $n;
    //$breakPoint = $n;

    if($n <= 0  || !is_int($n) || $n > 40){
        throw new InvalidArgumentException( "Input should be greater than zero. You entered: {$n}" );
    }

    for($i = 1 ; $i <= $numberOfLines ; $i++){
        $valuesPrinted = 0;
        $breakPoint = $numberOfValuesPerLines / $n ;
        while($valuesPrinted < $numberOfValuesPerLines){
            echo $valueToPrint." ";
            $valuesPrinted++;
            if($valuesPrinted % $breakPoint == 0){
                $valueToPrint--;
            }
        }
        echo "<br/>";
        $numberOfValuesPerLines -= $n;
        $valueToPrint = $n;
    }
    
}
echo printImprovedPattern(-5);
// function printPattern($n){

//         if($n <= 0){
//             throw new InvalidArgumentException( "Input should be greater than zero. You entered: {$n}" );
//         }

//         $lines = $n;
//         $count = $n * $n;
//         $printingNumber = $n;
//         for($i = 1 ; $i <=$lines ; $i++){
//             for($j = 1; $j <= $count ; $j++){
//                 $breakPoints = $count/$n;
//                 echo $printingNumber." ";
//                 if($j % $breakPoints == 0){
//                     $printingNumber--;
//                 }
//             }echo "<br/>";
//             $count = $count - $n;
//             $printingNumber = $n;
//         }
//     }
// echo printPattern(3);


//Improvement in the above code because above code will work on the positive integers but what if the input integer is negative.