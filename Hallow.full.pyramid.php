<?php 

$lines = 10;
$alpha = range('A', 'Z');
$starCount = 1 ; 

$spaceCount = $lines - 1;
$innerSpaceCount = 0;

echo"<h1>Hallow Full Pyramid using Star</h1><br/>";

for($i = 1 ; $i <= $lines ; $i++){

    for($j = 1 ; $j <= $spaceCount ; $j++){
        echo "&nbsp;&nbsp;&nbsp;" ;   // Print a space.
    }

    for($k = 1 ; $k <= $starCount ; $k++){
        if($k == 1 || $k == $starCount || ($i == 1 || $i == $lines )){
            echo "*&nbsp;";
        }
        else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }

    echo "<br/>";
    $spaceCount = $spaceCount-1;
    $starCount = $starCount+2;
    // echo "{$innerSpaceCount}";
}

$starCount = 1;
$spaceCount = $lines-1;

echo "<br/><h1>Hallow Full Pyramid using Alphabets</h1><br/>";

for($i = 1 ; $i <= $lines ; $i++){

    for($j = 1 ; $j <= $spaceCount ; $j++){
        echo "&nbsp;&nbsp;&nbsp;" ;   // Print a space.
    }

    for($k = 1 ; $k <= $starCount ; $k++){
        if($k == 1 || $k == $starCount || ($i == 1 || $i == $lines )){
            echo "$j&nbsp;";
        }
        else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }

    echo "<br/>";
    $spaceCount = $spaceCount-1;
    $starCount = $starCount+2;
    // echo "{$innerSpaceCount}";
}