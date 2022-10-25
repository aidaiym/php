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

    // conditions
    $isMale = true;
    if($isMale){
        echo "Male <br>";
    }
    elseif(!$isMale){
        echo "Female <br>";
    }
    else{
        echo "OMG <br>";
    }

    function getMax($number_one, $number_two){
        if($number_one>$number_two){
            echo "Number one grater then number two ";
            return $number_one;
        }
        elseif($number_one<$number_two){
            echo "Number two grater then number one ";
            return $number_two;
        }
        else{
            echo "Numbers are equal";
            return $number_one && $number_two;
        }
    }

    getMax(3,3);
    ?>
</body>

</html>