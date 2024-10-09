<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Super Global</title>
</head>
<body>
    <h2> Kayıt Formu </h2>
    <hr>
    <form action="data_send.php" method="POST" id="registerForm">
        <input type="text" name="name" id="name" placeholder="Adınız">
        <input type="text" name="surname" id="surname" placeholder="Soyadınız">
        <hr>
        <button type="submit"> Kaydet </button>
    </form>
    <hr>
    <input type="text" name="age" id="age" placeholder="Yaşınız" form="registerForm">
    <hr>
    <button type="submit" formaction="super_global.php" form="registerForm"> Yaşımı Kaydet </button>
    <?php
        echo '<h2>$_GET</h2>';
        print_r($_GET);
        echo '<hr>';
        echo '<h2>$_POST</h2>';
        print_r($_POST);
        echo '<hr>';
        echo '<h2>$_REQUEST</h2>'; // $_GET ve $_POST'un birleşimi olan bir süper global değişkendir.
        print_r($_REQUEST);
    ?>
    <br>
</body>
</html>