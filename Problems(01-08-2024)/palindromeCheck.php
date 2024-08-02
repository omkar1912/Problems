<?php
// Online PHP compiler to run PHP program online
// Print "Try programiz.pro" message
function palindromeCheck($number){
    if(!is_numeric($number) || (int)$number != $number){
        return "The given input is not an integer. Please enter an integer.";
    }
    
    if($number < 0){
        return "$number is not a palindrome number";
    }
    
    if($number === 0){
        return "$number is a palindrome number";
    }
    
    $originalNumber = $number;
    $palindromeCheck = '';
    $remainder = 0;
    
    while($number > 0){
        $remainder = $number % 10;
        $palindromeCheck .= $remainder;
        $number = (int)($number/10);
    }
    
    return $originalNumber === (int)$palindromeCheck ? "$originalNumber is a palindrome number" : "$originalNumber is not a palindrome number";
}

echo palindromeCheck("dsghjg hsdgh khgshgkj shdkgh");
