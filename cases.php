<?php
    $a = 5; // Integer
    $b = null;
    $c = [];
    $name = "Muhammed Erdem";
    $surname = "Bay";
    var_dump(isset($a)); // Check if it is set
    echo "<br>";
    var_dump(is_null($c)); // Check if it is null
    echo "<br>";
    $array = [1, 2, 3, 4, 5]; // Array with 5 elements
    if(isset($array[7])){ // Check if it is set
        echo "Var!";
    }else{
        echo "Yok!";
    }
    echo "<br>";
    echo $status ?? $name; // Null coalescing operator
    echo "<br>";
    echo $surname ?? "soyadı yok!"; // Null coalescing operator
    echo "<br>";
    echo $a > 6 ? $a." sayısı 6 dan Büyük" : $a. " sayısı 6 dan Küçük"; // Ternary operator
?>