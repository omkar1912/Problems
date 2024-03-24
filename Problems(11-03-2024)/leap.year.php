<?php 

    if(!isset($_POST['submit'])){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leap Year Program</title>
    </head>
    <body>
        <h1>Check whether the given year is leap year or not</h1><br/><br/>
        
        <form method="POST" action="leap.year.php">
            <label>Enter the Value Of Year</label><br/><br/>
            <input type="text" name = "year" value="" placeholder="Enter the Year"></br/><br/>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
    </html>
<?php 
    }
    else{
        if(isset($_POST["year"]) && empty(trim($_POST["year"]))){
            echo "<script>alert('Please enter a valid year');window.location.href='leap.year.php';</script>";
        }
        elseif(!is_numeric($_POST['year'])){
            echo "<script>alert('Invalid input! Please enter numeric values only'); window.location.href='leap.year.php'</script>";
        }
            else{
            $year = $_POST['year'];
            
            if(($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0){
                echo "<script>alert('The Given year is a Leap Year');</script>";
            }
            else{
                echo "<script>alert('The Given year is not a leap year');</script>";
            }
        }
    }
?>