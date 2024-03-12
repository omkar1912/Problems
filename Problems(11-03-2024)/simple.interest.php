<?php 
    //function for the calculating the SimpleInterest.
    function calculateSimpleInterest($principleAmount, $rateOfInterest, $time){
        // Using the Formula as : SI = P * R * T /  100.
        $simpleInterest = ($principleAmount * $rateOfInterest * $time)/100;

        return $simpleInterest;
    }

    
    if(isset($_POST['submit'])){
        //Validation
        if(!isset($_POST['data']['principle_amount']) && empty($_POST['data']['principle_amount'])){
            echo "The Principle Amount was not entered so could not calculate the Simple Interest<br/>";
        }

        if(!isset($_POST['data']['rate_of_interest']) && empty($_POST['data']['rate_of_interest'])){
            echo "The Rate of Interest was not entered so could not calculate the Simple Interest<br/>";
        }

        if(!isset($_POST['data']['time']) && empty($_POST['data']['time'])){
            echo "The Time was not entered so could not calculate the Simple Interest<br/>";
        }

        //If Validation passes the calculate the futher things. To make the code look prettier we are saving the data in the variables for reading capability.
        $principleAmount = $_POST['data']['principle_amount'];
        $rateOfInterest = $_POST['data']['rate_of_interest'];
        $time = $_POST['data']['time'];

        $simpleInterest = calculateSimpleInterest(floatval($principleAmount), floatval($rateOfInterest), intval($time));

        echo "<h3> The Simple Interest calculated is ".$simpleInterest;
    }