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
    if ($isMale) {
        echo "Male <br>";
    } elseif (!$isMale) {
        echo "Female <br>";
    } else {
        echo "OMG <br>";
    }

    function getMax($number_one, $number_two)
    {
        if ($number_one > $number_two) {
            echo "Number one grater then number two ";
            return $number_one;
        } elseif ($number_one < $number_two) {
            echo "Number two grater then number one ";
            return $number_two;
        } else {
            echo "Numbers are equal";
            return $number_one && $number_two;
        }
    }

    getMax(3, 3);

    //  classes 
    class Book
    {
        var $title;
        var $author;
        var $pages;
        // constructor
        function __construct($atitle, $abook, $aPages)
        {
            $this->title = $atitle;
            $this->author = $abook;
            $this->pages = $aPages;
        }
    }

    $newBook = new Book("Harry", "Potter", "450"); // object
    $book1 = new Book("sd", "sdf", "432");

    $newBook->author = "Harry";
    $newBook->title = "Potter";
    $newBook->pages = "450";

    echo $newBook->author;

    // object function
    class Student
    {
        var $name;
        var $gpa;
        function __construct($name, $gpa)
        {
            $this->name = $name;
            $this->gpa = $gpa;

        }
        function hasHonors()
        {
            if ($this->gpa > 3.0) {
                return true;
            } else {
                return false;
            }
        }
    }
    $newStud = new Student("Ad", 3.4);
    $newStud2 = new Student("Adam", 3.0);
echo $newStud -> hasHonors();
    ?>
</body>

</html>