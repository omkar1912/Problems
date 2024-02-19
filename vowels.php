<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowels and Constants</title>
</head>

<body>
    <form action="vowels.php" method="POST">
        <label>Enter a alphabet to check whether it is Vowel or Constants</label><br>
        <input type="text" value="" name="alphabet" max="1" placeholder="Enter a alphabet"><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['alphabet']) && !empty($_POST['alphabet'])) {
        $alphabet = $_POST['alphabet'];

        switch ($alphabet) {
            case 'a':
                echo "An entered alphabet is a vowel.";
                break;

            case 'e':
                echo "An entered alphabet is a vowel.";
                break;

            case 'i':
                echo "An entered alphabet is a vowel.";
                break;

            case 'o':
                echo "An entered alphabet is a vowel.";
                break;

            case 'u':
                echo "An entered alphabet is a vowel.";
                break;

            default:
                echo "An entered alphabet is a constant.";
        }
    }
}
?>