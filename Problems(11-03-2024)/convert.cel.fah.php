<?php 
    if(isset($_POST['convert_to_celcius']) || isset($_POST['convert_to_fahrenheit'])){
        if(isset($_POST['temperature']) && !empty($_POST['temperature'])) {
            $temperature  = $_POST['temperature'];
            $keyWord      = $_POST['convert_to_celcius'] ? 'Celsius' : ( $_POST['convert_to_fahrenheit'] ? 'Fahrenheit' : null);
            $result = calculateTemperature($temperature,$keyWord);

            echo "<h1>{$result}</h1><br/>";
        }
        else{
            echo "The temperature Cannot be Empty<br/>";
            header( 'Location: degree-celcius-fah.html' ) ;
        }
    }
    else{
        die(header("Location: degree-celcius-fah.html"));
    }

    function calculateTemperature($temperature,$keyWord){
        switch ($keyWord) {
            case 'Celsius':
                $Celsius = round(($temperature-32)*5/9,2);
                $result = 'The tempearture in celcius is '.$Celsius.' degree Celsius';
                break;

            case 'Fahrenheit':
                $fahreneit = ($temperature * (9/5)) + 32;
                $result = 'The temperature in fahreneit is '.$fahreneit.' degree Fahrenheit';
                break;
                
            default:
                $result = "Sorry Could not help you in converting the temperature";
                break;
        }

        return $result;
    }


