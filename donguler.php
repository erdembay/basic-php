<?php
    $sayilar1 = [1, 2, 3, 4, 5];
    $sayilar2 = [6, 7, 8, 9, 10];
    $address= ['city' => 'Istanbul', 'country' => 'Turkey'];
    foreach ($address as $key => $value) {
        echo $key . ' : ' . $value . '<br>';
    }
    for ($i=0; $i < count($sayilar2); $i++) { 
        echo  $i+1 . '. eleman => '. $sayilar2[$i] . '<br>';
    }
    $i = 0;
    while ($i < count($sayilar1)) {
        echo  $i+1 . '. eleman => '. $sayilar1[$i] . '<br>';
        $i++;
    }
?>