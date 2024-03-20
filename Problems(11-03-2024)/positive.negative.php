<?php

    if(!isset($_POST['submit'])){    
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Check the Given Number Is Positive Or Negative</title>
    </head>
    <body>
        <h1>Check Whether the Number Is Positivre Or Negative</h1>
        <form id="my_form" method="POST" action="positive.negative.php">
            <label>Enter The Number</label><br><br>
            <input type="number" name="number" value=" " placeholder="Enter The Number"><br/><br/>

            <input type="submit" value="Submit" name="submit"/><br/><br/>
        </form>
    </body>
    </html>
<?php
    }

    else{
        if(isset($_POST['number']) && !is_numeric($_POST["number"])) {
            echo "Number Is Required. Please enter the number<br/>";   
        }
        else{
            $number = $_POST['number'];

            if ($number > 0) {
                $message = "$number is a positive number<br/>";
            } else if ($number < 0) {
                $message = "$number is a negative number<br/>";
            } else {
                $message = "$number is zero. It is not a positive integer and negative integer<br/>";
            }

            echo "<h1>The result of the form is : </h1><br/>";
            echo $message;
        }
    }
?>