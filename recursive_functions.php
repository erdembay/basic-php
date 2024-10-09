<?php
    declare(strict_types=1);
    echo '<h1>Recursive Functions</h1>';
    $persons = [
        ['name' => 'John', 'age' => 25, 'address' => ['city' => 'Istanbul', 'country' => 'Turkey', 'continent' => 'Europe', 'planet' => 'Earth']],
        ['name' => 'Jane', 'age' => 30, 'address' => ['city' => 'Ankara', 'country' => 'Turkey']],
        ['name' => 'Jack', 'age' => 35, 'address' => ['city' => 'Izmir', 'country' => 'Turkey']],
        ['name' => 'Jill', 'age' => 40, 'address' => ['city' => 'Antalya', 'country' => 'Turkey']]
    ];
    function printPersons(array $persons): void {
            foreach ($persons as $key => $value) {
                if (is_array($value)) {
                    printPersons($value);
                } else {
                    echo $key . ' : ' . $value . '<br>';
                }
            }
            echo '<br>';
    }
    printPersons($persons);
    $json = json_encode($persons);
    echo $json;
    echo '<br>';
    $array = json_decode($json);
    print_r($array);

?>