<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <form action="calculator.php" method="post">
        Type number a: <input type="number" step="0.001" name="num1">
        <br>
        Type number b: <input type="number" step="0.001" name="num2">
        Operator: <input type="text" name="operator">

        <input type="submit" value="">
    </form>
    <?php
    $operator = $_POST["operator"];
    if ($operator == "+") {
        $summa = $_POST["num1"] + $_POST["num2"];
        echo "Summa $summa </br>";
    } elseif ($operator == "-") {
        $differense = $_POST["num1"] - $_POST["num2"];
        echo "Differense $differense </br>";
    } elseif ($operator == "*") {
        $product = $_POST["num1"] * $_POST["num2"];

        echo "Product of two numbers $product </br>";
    } elseif ($operator == "/") {
        $quotient = $_POST["num1"] / $_POST["num2"];

        echo "Quotient $quotient </br>";
    } else {
        echo "Something wrent wrong  </br>";
    }

    ?>
</body>

</html>