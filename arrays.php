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
?>