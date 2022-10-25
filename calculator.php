<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <form action="calculator.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit" value="">
    </form>
    <?php
    $summa = $_GET["num1"] + $_GET["num2"];
    $differense = $_GET["num1"] - $_GET["num2"];
    $product = $_GET["num1"] * $_GET["num2"];
    $quotient = $_GET["num1"] / $_GET["num2"];
    echo "Summa $summa </br>";
    echo "Differense $differense </br>";
    echo "Product of two numbers $product </br>";
    echo "Quotient $quotient </br>";
    
    ?>
</body>

</html>