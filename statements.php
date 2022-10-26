<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="statements.php" method="post">
        <input type="text" name="grade" id="">
        <input type="button" value="result">
    </form>
    <?php
    $grade = $_POST["grade"];
    switch($grade){
        case "A":
            echo "Amazing";
            break;
        case "B":
            echo "Excellent";
            break;
        default:
            echo "Invalid Grade";

    }
    ?>
</body>
</html>