<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function hi($name)
    {
        echo "Hello $name </br>";
    }
    hi("Aidai");
    hi("Misa");
    function cube($num)
    {
        return $num * $num * $num;
    }
    $resCube = cube(7);
    echo "Cube = $resCube";
    ?>
</body>

</html>