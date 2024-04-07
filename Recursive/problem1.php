<?php

function displayNumber($number){
    if($number <= 5){
        echo "$number <br/>";
        displayNumber($number+1);
    }
}

displayNumber(1);