<?php
    // $rows = 5;
    // $columns = 5;
    // for($i = 0 ; $i < $rows ; $i++ ){
    //     for($j = 0 ; $j <= $i ; $j++){
    //         echo "*";
    //     }
    //     echo "<br/>";
    // }

//For Pyramid
    // $lines = 5 ; 
    // $spaceCount = 2;
    // $starCount = 1;
    // $mid = ($lines + 1)/2;
    

    // for($i = 1; $i <= $lines ; $i++){
    //     for($k =1 ; $k <= $spaceCount ; $k++){
    //         echo"&nbsp;&nbsp;";
    //     }
    //     for($j = 1;  $j <= $starCount ; $j++){
    //         echo "*";
    //     }
    //     echo "<br/>";
    //     if($i < $mid){
    //         $spaceCount = $spaceCount - 1;
    //         $starCount = $starCount + 2;
    //     }
    //     else{
    //         $spaceCount = $spaceCount + 1;
    //         $starCount = $starCount - 2;
    //     }
    // }


    $lines = 3;
    $starCount = 1;
    $spaceCount = 2;

    for($i = 1 ; $i <= $lines ; $i++){
        for($j = 1 ; $j <= $spaceCount ; $j++){
            echo "&nbsp;&nbsp;";
        }
        for($k = 1 ; $k <= $starCount ; $k++){
            echo "*";
        }
        echo "<br/>";
        $spaceCount -= 1;
        $starCount += 2;
        
    }
?>