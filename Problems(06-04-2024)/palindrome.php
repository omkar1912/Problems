<?php 


function isPalindrome($n){
    $originalNumber = $n;
    $reversedNumber = '';

    while($n > 0){
        $rem = $n % 10;
        $reversedNumber .= $rem;
        $n = (int)($n/10);
    }

    if($originalNumber == $reversedNumber){
        return "The number $originalNumber is a Palindrome Number";
    }
    else{
        return "The number $originalNumber is not a Palindrome Number";
    }
}

echo isPalindrome(1232);