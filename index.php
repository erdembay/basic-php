<?php
    function duzgun_bas($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    echo "Hello World!" . PHP_EOL;
    echo "<br>";
    $name = "Muhammed Erdem";
    $surname = "Bay";
    echo $name . " " . $surname;
    echo "<br>";
    echo strlen($name);  // Length
    echo "<br>";
    echo strrev($name);   // Reverse
    echo "<br>";
    echo str_repeat($name, 3); // Repeat 3 times
    echo "<br>";
    echo strtoupper($name);  // Upper case
    echo "<br>";
    define("PI", 3.14); // Constant
    echo PI; // Constant
    echo "<br>";
    $a = 5; // Integer
    $b = 10.5; // Float
    echo "<br>";
    //Arrays
    $array = array("Muhammed", "Erdem", "Bay"); // Array with 3 elements
    echo $array[0]; // Print first element
    echo "<br>";
    echo $array[1]; // Print second element
    echo "<br>";
    echo $array[2]; // Print third element
    echo "<br>";
    //Boolean
    $isActive = true; // Boolean
    $isActive = false; // Boolean
    //Null
    $status = null; // Null
    echo is_int($a); // Check if it is integer
    echo "<br>";
    echo is_int($name); // Check if it is integer
    echo "<br>";
    var_dump(is_int($a)); // Print variable type and value
    echo "<br>";
    var_dump(is_int($name)); // Print variable type and value
    echo "<br>";
    var_dump($a); // Print variable type and value
    echo "<br>";
    var_dump($name); // Print variable type and value
    echo "<br>";
    echo "<pre>";
    var_dump($array); // Print variable type and value
    echo "</pre>";
    echo "<br>";
    echo "<pre>";
    print_r($array); // Print array
    echo "</pre>";
    duzgun_bas($array);
    duzgun_bas($name);
    
?>