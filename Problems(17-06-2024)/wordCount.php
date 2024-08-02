<?php 

// 1. Write a Program to find the count of the each and every letters in the string

// 	for Eg. String is "Hare Krishna Hare Krishna Krishna Krishna Hare Hare"

function getWordCount($str){
    $str = strtolower($str);
    $str = str_split($str);

    $result = array();
    //$wordAdded = array();
    $count = 0;
    for($i = 0; $i < count($str) ; $i++){
        if(in_array($str[$i],$result)){
            echo "if ".$str[$i]."<br/>";
            //array_push($result,$str[$i]);
        }
        else{
            echo "else ".$str[$i]."<br/>";
            array_push($result,$str[$i]);
        }
    }
    
    return $result;
}

echo(print_r(getWordCount('Hare Krishna Hare Krishna Krishna Krishna Hare Hare'),true));

