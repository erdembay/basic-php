<?php
    $a = 5; // Integer
    $b = 10.5; // Float
    $sum = function($num1=2, $num2=3, $num3=4, $num4=5){ // Default values
        return $num1 + $num2 + $num3 + $num4;
    };
    echo $sum(num1:$a, num2:$b);
    echo "<br>";
    $carp = function(){ // Global variables
        global $a, $b;
        return $a * $b;
    };
    echo $carp();
    echo "<br>";
    $name = "Muhammed Erdem";
    $surname = "Bay";
    $array = array("Muhammed", "Erdem", "Bay"); // Array with 3 elements
    $isim = function($name, $surname) use($array){ // Use variables
        echo $name . " " . $surname;
        echo "<br>";
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    };

    $isim($name, $surname);

    echo "<br>";
    echo "<pre>";
    print_r($GLOBALS); // Print global variables
    echo "</pre>";
?>