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
    // print smth
    echo "Hello world! <br>";
    // variables
    $charachterName = "John";
    $charachterAge = 20;
    echo "Hello $charachterName! <br>";
    echo "$charachterName age $charachterAge <br>";
    // data types
    // string
    $stringDataType = "string ds s";
    //                 012345
    echo strtolower($stringDataType);  // contert to lowerCase
    echo strtoupper($stringDataType);  // contert to upperCase
    echo strlen($stringDataType);  // length
    echo $stringDataType[4];  // first charachter
    echo str_replace("string","replacing", $stringDataType);  // first charachter
echo substr($stringDataType, 3, 4);


    // integers
    $numberDataType = -12;
    // decimal point
    $decimalNumber = 4.0;
    // boolean
    $booleanDataType = true;
    // null
    $nullDataType = null;
    echo $booleanDataType;

    
    ?>
</body>

</html>