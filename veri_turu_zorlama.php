<?php
    declare(strict_types=1);
    function topla(int|float $sayi1, int|float $sayi2): void {
        $sonuc = $sayi1 + $sayi2;
    }
    echo topla(5.6, 10);
    $name = '215';
    $sayi = (int)($name);
    $float_sayi = (float)($sayi);
    $string_sayi = (string)($float_sayi);
    var_dump($name);
    echo '<br>';
    var_dump($sayi);
    echo '<br>';
    var_dump($float_sayi);
    echo '<br>';
    var_dump($string_sayi);
    echo '<br>';
    $address = ['city' => 'Istanbul', 'country' => 'Turkey', 'continent' => 'Europe', 'planet' => 'Earth'];
    $long_address = implode(' - ', $address);
    echo $long_address;
    echo '<br>';
    $short_address = explode(' - ', $long_address);
    print_r($short_address);
?>