<?php 

// 1. Write a Program to find the count of the each and every letters in the string

// 	for Eg. String is "Hare Krishna Hare Krishna Krishna Krishna Hare Hare"

function getWordCount($str){
    $str = strtolower($str);

    for($i = 0; $i < strlen($str) ; $i++){
        $char = $str[$i];
        if(!isset($wordCount[$char])){
            $wordCount[$char] = 0;
        }
        $wordCount[$char]++;
    }
    
    return $wordCount;
}

echo(json_encode(getWordCount('Hare Krishna Hare Krishna Krishna Krishna Hare Hare'),true));