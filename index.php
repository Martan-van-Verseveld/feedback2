<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Feedback</title>
</head>
<body>
<form action="" method="POST">
    <input required type="radio" id="O1" name="smiley" value="O1">
    <input required type="radio" id="O2" name="smiley" value="O2">
    <input required type="radio" id="O3" name="smiley" value="O3">
    <input required type="radio" id="O4" name="smiley" value="O4">
    <input required type="radio" id="O5" name="smiley" value="O5">
    <br>
    <label for="O1">&#128513;</label>
    <label for="O2">&#128516;</label>
    <label for="O3">&#128528;</label>
    <label for="O4">&#128530;</label>
    <label for="O5">&#128544;</label>
    <br>
    <textarea name="feedback" id="feedback"></textarea>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    if (isset($_POST["submit"])) {
        $smiley = htmlspecialchars($_POST['smiley']);
        $feedback = htmlspecialchars($_POST['feedback']);

        switch ($smiley) {
            case 'O1':
                $smiley = "Uitstekend";
                break;
            case 'O2':
                $smiley = "Goed";
                break;
            case 'O3':
                $smiley = "Redelijk";
                break;
            case 'O4':
                $smiley = "Matig";
                break;
            case 'O5':
                $smiley = "Slecht";
                break;
        }

        echo "<p>Uw smiley keuze was de: </p >".$smiley;
        echo "<p>Uw opmerking was: </p>".$feedback;

    }
?>
</body>
</html>
