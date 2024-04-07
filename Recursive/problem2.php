<?php 

    function factorial($n){
        echo "n = ".$n."<br/>";
        if($n < 0){
            return -1;
        }

        if($n == 0){
            return 1;
        }

        return ($n * factorial($n-1));
    }

    echo factorial(6); /*/ Output: 720 */