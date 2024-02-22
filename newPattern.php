<?php


// *
// * **
// * ** **



$starCount = 1;
$spaceCount = 0; 
$lines = 6;
$totalCount = 1;

for($i = 1; $i <=$lines; $i++){
    //error_log('i = '.$i);
    //FOr Space Count
    for($j = 1 ; $j <= $totalCount; $j++){
       if($j == 1){
            echo "*";
       }
       elseif($j == 2)
       {
            echo "&nbsp";
            $spaceNumber = $j;
       }
       else{
            //error_log('j = '.$j);
            if($j == ($spaceNumber + 3)){
                echo "&nbsp;";
                $spaceNumber = $spaceNumber + 3;
            }
            else{
                echo "*";
            }
       }

    }
    echo "<br/>";
    $totalCount = $totalCount + 3;
}

$i = [1, 2, 3, 4]; // Your input array
$j = []; // Initialize an empty array to store the results

for ($n = 0; $n < count($i); $n++) {
    $j[$n] = pow($i[$n], 2); // Square each element of i and store in j
}

print_r($j); // Output the resulting array

