<?php 

$lines = 15;

$mid = ($lines % 2 != 0 ) ? ($lines + 1) / 2 : $lines /2;

// echo $mid;

// echo "<br/>";

$starCount = 1 ; 

$spaceCount = $lines - 1;

$name = array('O','M','K','A','R');

for($i = 1 ; $i <= $lines ; $i++){
    //space
    // echo "$i";

    // echo "<br/>";
    for($j  = 1 ;$j <=  $spaceCount ; $j++){
        echo "&nbsp;&nbsp;&nbsp;" ;
    }

    //starcount
    for($k = 1; $k <= $starCount ; $k++){
        $innerSpaceCount = 1;
        if($k == 1 || $k == $starCount || ($i == 1 || $i == $lines )){
            echo "*&nbsp;";
        }
        else{
                echo "&nbsp;&nbsp;&nbsp;"; 
            }
            
    }
    echo "<br/>";
    if($i < $mid){
        $spaceCount =  $spaceCount - 1 ;
        $starCount =  $starCount + 2;
    }
    else{
        $spaceCount = $spaceCount + 1;
        $starCount = $starCount - 2;
    }
}