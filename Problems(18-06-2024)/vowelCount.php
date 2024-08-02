<?php

function vowelCount($str){
    $vowels = array('a','e','i','o','u');

    $str = strtolower($str);

    $vowelCount = array();
    for($i = 0 ; $i < strlen($str); $i++){
        $char = $str[$i];

        if(in_array($str[$i],$vowels)){
            $vowelCount[$char]++;
        }
    }
    return $vowelCount;
}

echo(json_encode(vowelCount('Hare Krishna Hare Krishna Krishna Krishna Hare Hare')));