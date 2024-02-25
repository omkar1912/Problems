<?php

$starCount = 1;
$lines = 16;

$spaceCount = 1;
$count = '';
$space = 1;
for($i = 1 ; $i <= $lines ; $i++){
    error_log('First i is : '.$i);
    error_log('First Star Count is : '.$starCount);
    $count = 1;
    for($j = 1; $j <= $starCount ; $j++){
        echo "*";

        if($j == $space){
            echo "&nbsp;";
            $count = $count + 1;
            $space = $space + $count;
        }
    }
    
echo "<br/>";
$starCount = $starCount + $i + 1;
$space = 1;
}

//echo "******************************************************************** Reverse Pyramid ******************************************************************************************";

//Decreasing the Pyramid 

$newLineCount = $lines - 1;
$newstarCount = $starCount - $lines - 1;

for($i = $newLineCount ; $i >= 0 ; $i--){
    if($i == $newLineCount){
        $newstarCount = $newstarCount - $i -1;
    }
    else{
        $count = 1;
        for($j = 1 ; $j <= $newstarCount ; $j++){
            echo "*";

            if($j == $space){
                echo "&nbsp;";
                $count = $count + 1;
                $space = $space + $count;
            }
        }
        echo "<br/>";
        $newstarCount = $newstarCount - $i - 1;
        $space = 1;
    }
}


