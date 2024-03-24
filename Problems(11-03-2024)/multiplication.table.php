<?php 

    if(!isset($_POST['submit'])){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multiplication Table</title>

        <link rel="stylesheet" href="multi_table.css">
    </head>
    <body>
        <h1>Printing the Multiplication Table for the given Number</h1><br/><br/>

        <form action="multiplication.table.php" method="post">
            <label>Please Enter the Number:</label><br/><br/>
            <input type="number" name="number" required /><br/><br/>
            <input type="submit" name="submit" value="Submit"><br/><br/>
        </form>
    </body>
    </html>
<?php

    }else{
        if(empty($_POST["number"]) && !isset($_POST['number'])) {
            echo "<script>alert('Please enter the number');
            window.location.href='multiplication_table.php';
            </script>";
        }
        elseif($_POST['number'] < 0 && !is_numeric($_POST['number'])) {
            echo "<script>alert('Please Enter the number gretaer than 0');
            window.location.href = 'multiplication.table.php';</script>";
        }
        else{
            $number = $_POST['number'];
            echo "<h1>Multiplication Table of " .$number." is : </h1>" ;
            echo "<table  border=\"2\">";
                echo "<thead>";
                    echo "<th width=\"100px\">x</th>";
                    echo "<th width=\"100px\">".$number." * x</th>";
                echo "</thead>";

                echo"<tbody align=\"center\" >";
                    for($i = 1 ; $i <= 10 ; $i++){
                        echo "<tr>";
                            echo"<td>". $i ."</td>";
                            echo"<td>$number * $i = ". ($number * $i) ."</td>";
                        echo "</tr>";
                    }
                echo"</tbody>";
            echo "</table>";
        }

    }