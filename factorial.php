<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial of the Given Number</title>
</head>
<body>
    <?php 
    if(!isset($_POST['submit'])){
    ?>
    <form id = "factorial_form" action="factorial.php" method="post">
        <label for="factorial_number">Enter the Factorial Number</label><br/>
        <input type="text" name="factorial_number" value="" placeholder="Enter the Factorial Numeber"><br/>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    }
    else{
        if(!isset($_POST['factorial_number']) && empty($_POST['factorial_number'])){
            echo "Please enter the Number<br/>";
        }

        elseif($_POST['factorial_number'] < 0){
            echo "Please enter the Positive Number</br>";
        }

        else{
            $number = $_POST['factorial_number'];
            $factorial = 1;
            while($number > 0){
                $factorial = $factorial * $number;
                $number--;
            }

            echo"<br/><h1> The factorial of the given number is </h1><br/>";
            echo $factorial;
        }
    }
?>
    
</body>
</html>