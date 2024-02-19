<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Document</title>
</head>

<body>
    <form method="POST" action="grade.php">
        <label>
            Enter The Percentage
        </label>
        <input type="text" value="" name = "percentage" placeholder="Enter the Percentage">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>

<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['percentage']) && !empty($_POST['percentage'])){
            $percentage = $_POST['percentage'];

            switch($percentage){
                case($percentage > 0 && $percentage <= 35):
                    echo "You have got F Grade in the Examination";
                    break;
                
                case($percentage > 35 && $percentage <= 40):
                    echo "You have got E Grade in the Examination";
                    break;
                
                case($percentage > 40 && $percentage <= 45):
                    echo "You have got D Grade in the Examination";
                    break;
                case($percentage > 45 && $percentage <= 55 ):
                    echo "You have got C Grade in the Examination";
                    break;
                case($percentage > 55 && $percentage <= 60):
                    echo "You have got B Grade in the Examination";
                    break;
                case($percentage >60 && $percentage <= 70):
                    echo "You have got A Grade in the Examination";
                    break;

                case ($percentage > 70 && $percentage <= 100):
                    echo "You have got O Grade in the Examination";
                    break;

                default:
                    echo "No Grade Found";
            }   

        }
        else{   
            echo "Please Enter the Percentage";
        }
    }else{
        echo "Please Submit the Form";
    }
?>