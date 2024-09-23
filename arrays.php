<?php
    $person = [
        'name' => 'Erdem',
        'surname' => 'Bay',
        'age' => 27,
        'job' => 'Software Developer',
        'address' => [
            'city' => 'İstanbul',
            'district' => 'Bağcılar',
            'neighborhood' => 'Barbaros Mahallesi'
        ]
    ];
    $person_copy = $person; // Copy array
    /*
    Array elementine erişirken kullanılan farklı yöntemler nelerdir? => Ben sordum.
    Array elementine erişirken kullanılan farklı yöntemler vardır. Bunlar;
    1-) $person['address']['city'] şeklinde erişim yapılabilir.
    2-) $city = $person['address']['city']; şeklinde erişim yapılabilir.
    3-) extract($person['address']); şeklinde extract fonksiyonu ile erişim yapılabilir.
    => Github Copilot cevapladı.
    */
    echo $person['address']['city']; // Accessing array element
    echo "<br> ----------------- <br>";
    $city = $person['address']['city']; // Accessing array element
    echo $city;
    echo "<br> ----------------- <br>";
    extract($person); // Accessing array element
    echo $name;
    echo "<br>";
    echo $surname;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $job;
    echo "<br>";
    extract($address); // Accessing array element
    echo $city;
    echo "<br>";
    echo $district;
    echo "<br>";
    echo $neighborhood;
    echo "<br>";
    unset($age); // Unset person array
    echo $age ?? 'YAŞ YOK!'; // Undefined variable
    echo "<br>";
    unset($address);
    var_dump($address ?? 'ADRES DATASI YOK!'); // Undefined variable
    /*
        Extract Kullanımını Daha Detaylı Açıklar mısınız? => Ben sordum.
        Extract fonksiyonu ile bir array içerisindeki elemanlara erişim sağlanabilir. Bu fonksiyon ile array içerisindeki elemanlar değişkenlere atanır.
        Bu sayede array içerisindeki elemanlara daha kolay erişim sağlanabilir.
        Örneğin; extract($person['address']); şeklinde kullanıldığında city, district ve neighborhood elemanlarına erişim sağlanabilir.
        => Github Copilot cevapladı.
        Extracttaki değişkenleri bir daha kullanmak istemiyorsak nasıl bir yol izlemeliyiz? => Ben sordum.
        Extract fonksiyonu ile oluşturulan değişkenlerin aynı isimde olmamasına dikkat edilmelidir. Aksi takdirde hata alınabilir.
        Extract fonksiyonu ile oluşturulan değişkenlerin bir daha kullanılmaması için extract fonksiyonu kullanıldıktan sonra unset($person); şeklinde kullanılabilir.
        => Github Copilot cevapladı.
        Unsetten Başka bir yol var mı? => Ben sordum.
        Extract fonksiyonu ile oluşturulan değişkenlerin bir daha kullanılmaması için extract fonksiyonu kullanıldıktan sonra unset($person); şeklinde kullanılabilir.
        Ayrıca extract fonksiyonu kullanılmadan önce extract($person, EXTR_SKIP); şeklinde kullanılabilir. Bu sayede aynı isimde değişkenler oluşturulmaz.
        => Github Copilot cevapladı.
    */
    echo "<br> ----------------- <br>";
    $person['department'] = 'Software'; // Add new element to array
    echo '<pre>';
    print_r($person);
    echo '</pre>';
    echo "<br> ----------------- <br>";
    $person[] = 'Yeni Eleman'; // Add new element to array
    echo '<pre>';
    print_r($person);
    echo '</pre>';
    echo "<br> ----------------- <br>";
    echo count($person). " Adet Eleman var."; // Count array elements
    echo "<br> ----------------- <br>";
    echo "ARRAY SIRALAMA FONKSİYONU";
    echo '<br>';
    sort($person_copy); // Sort array elements
    echo '<pre>';
    print_r($person_copy);
    echo '</pre>';
    /*
    Sort yaptıktan sonra array in keyleri değişti sebebi nedir? => Ben sordum.
    Sort fonksiyonu array elemanlarını sıralar. Bu sıralama işlemi sırasında array elemanlarının keyleri değişebilir.
    Bu durumun sebebi sort fonksiyonunun array elemanlarını sıralarken keyleri değiştirmesidir.
    => Github Copilot cevapladı.
    */
    echo "<br> ----------------- <br>";
    echo 'ARRAY TERS SIRALAMA FONKSİYONU';
    echo '<br>';
    rsort($person_copy); // Reverse sort array elements
    echo '<pre>';
    print_r($person_copy);
    echo '</pre>';
    echo "<br> ----------------- <br>";
    echo 'ARRAY PUSH FONKSİYONU';
    echo '<br>';
    array_push($person, 'Yeni Eleman 2'); // Add new element to array
    echo '<pre>';
    print_r($person);
    echo '</pre>';
    echo "<br> ----------------- <br>";
    echo 'ARRAY POP FONKSİYONU => Son Elemanı Siler';
    echo '<br>';
    array_pop($person); // Remove last element from array
    echo '<pre>';
    print_r($person);
    echo '</pre>';
    echo "<br> ----------------- <br>";
    echo 'ARRAY UNSHIFT FONKSİYONU => İlk Eleman olarak Ekler';
    echo '<br>';
    array_unshift($person, 'Yeni Eleman 3'); // Add new element to array
    echo '<pre>';
    print_r($person);
    echo '</pre>';
    echo "<br> ----------------- <br>";
    echo 'ARRAY SHIFT FONKSİYONU => İlk Elemanı Siler';
    echo '<br>';
    array_shift($person); // Remove first element from array
    echo '<pre>';
    print_r($person);
    echo '</pre>';
    echo "<br> ----------------- <br>";
    echo 'KEY EXIST FONKSİYONU => Key var mı yok mu kontrol eder';
    echo '<br>';
    array_key_exists('name', $person) ? 'Var!' : 'Yok!'; // Check if key exists
    echo "<br> ----------------- <br>";
    $numbers = [1, 2, 3, 4, 5];
    $numbers2 = [6, 7, 8, 9, 10];
    $numbers3 = array_reverse($numbers2); // Reverse array
    echo 'ARRAY REVERSE FONKSİYONU => Array ı ters çevirir';
    echo '<br>';
    echo '<pre>';
    print_r($numbers2);
    print_r($numbers3);
    echo '</pre>';
    echo "<br> ----------------- <br>";
    echo 'ARRAY KEYS FONKSİYONU => Array ın keylerini döndürür';
    echo '<br>';
    echo '<pre>';
    print_r(array_keys($person));
    print_r(array_keys($person['address']));
    echo '</pre>';
    echo "<br> ----------------- <br>";
    echo 'ARRAY SEARCH FONKSİYONU => Elemanı arar ve keyini döndürür';
    echo '<br>';
    var_dump(array_search('Erdem', $person)); // Search element in array
    echo "<br>";
    var_dump(array_search('Test', $person)); // Search element in array
    echo "<br> ----------------- <br>";
    echo 'IN ARRAY FONKSİYONU => Elemanın array içinde olup olmadığını kontrol eder';
    echo '<br>';
    var_dump(in_array('Erdem', $person)); // Check if element exists in array
    echo "<br>";
    var_dump(in_array('Test', $person)); // Check if element exists in array
    echo "<br> ----------------- <br>";
    echo 'ARRAY SLICE FONKSİYONU => Array ın bir kısmını döndürür';
    echo '<br>';
    echo '<pre>';
    print_r(array_slice($person, 1, 2));
    echo '</pre>';
    echo "<br> ----------------- <br>";
    echo 'ARRAY SPLICE FONKSİYONU => Array ın bir kısmını siler ve döndürür';
    echo '<br>';
    echo '<pre>';
    print_r(array_splice($person, 1, 2));
    print_r($person);
    echo '</pre>';
    echo "<br> ----------------- <br>";
?>