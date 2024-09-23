<?php
    $a = 5; // Integer
    $b = null;
    $c = [];
    $name = "Muhammed Erdem";
    $surname = "Bay";
    var_dump(isset($a)); // Check if it is set
    echo "<br> ----------------- <br>";
    var_dump(is_null($c)); // Check if it is null
    echo "<br> ----------------- <br>";
    $array = [1, 2, 3, 4, 5]; // Array with 5 elements
    if(isset($array[7])){ // Check if it is set
        echo "Var!";
    }else{
        echo "Yok!";
    }
    echo "<br> ----------------- <br>";
    echo $status ?? $name; // Null coalescing operator
    echo "<br> ----------------- <br>";
    echo $surname ?? "soyadı yok!"; // Null coalescing operator
    echo "<br> ----------------- <br>";
    echo $a > 6 ? $a." sayısı 6 dan Büyük" : $a. " sayısı 6 dan Küçük"; // Ternary operator
    echo "<br> ----------------- <br>";
    $day = 3;
    switch($day){ // Switch case
        case 1:
            echo "Pazartesi";
            break;
        case 2:
            echo "Salı";
            break;
        case 3:
            echo "Çarşamba";
            break;
        case 4:
            echo "Perşembe";
            break;
        case 5:
            echo "Cuma";
            break;
        case 6:
            echo "Cumartesi";
            break;
        case 7:
            echo "Pazar";
            break;
        default:
            echo "Geçersiz Gün!";
            break;
    }
    echo "<br> ----------------- <br>";
    // Switch case use match
    $day = 3;
    echo match($day){
        1 => "Pazartesi",
        2 => "Salı",
        3 => "Çarşamba",
        4 => "Perşembe",
        5 => "Cuma",
        6 => "Cumartesi",
        7 => "Pazar",
        default => "Geçersiz Gün!"
    };
    // INFO: match is available in PHP 8.0 and later //Github copilot is amazing. Copilot writes excellent explanations of the code.
    /*
    Match kullanımının performans açısından önemi nedir? => Ben sordum.
    Match kullanımı switch case yapısına göre daha performanslıdır. Çünkü match yapısı daha optimize edilmiş bir yapıdır. Bu sayede daha hızlı çalışır.
    Daha detaylı açıklamak gerekirse match yapısı daha az bytecode üretir. Bu sayede daha az işlem yapar ve daha hızlı çalışır.
    => Github Copilot cevapladı.
    */
    echo "<br> ----------------- <br>";
    /*
    INFO: SWITCH CASE VE MATCH İLE İLGİLİ BİLGİLER İÇİN AŞAĞIDAKİ LİNKE TIKLAYINIZ.
    Switch Case =>  https://www.php.net/manual/en/control-structures.switch.php
    Match => https://www.php.net/manual/en/control-structures.match.php
    */
?>