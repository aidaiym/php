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
     $index = 1;
    while($index < 5){
        echo "$index <br>";
        $index++;
    }

    // do something and after check

    do{
        echo "$index <br>";
        $index++;
    }
    while($index < 5);

    //  for loop
    $luckyNumbers = array("1","@,", "#@","ds");
for($i =1; $i<4; $i++ ){
    echo "$luckyNumbers[$i] <br>";
}
/*
multiple comment
*/ 
    ?>
</body>
</html>
