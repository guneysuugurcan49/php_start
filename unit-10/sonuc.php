<?php

error_reporting(E_ALL);

if ($_FILES['dosya']['error'] == 4) {
    echo 'Lütfen Dosya Seçiniz.';
} else {
    if (is_uploaded_file($_FILES['dosya']['tmp_name'])) {
        $gecerli_dosya_uzantilari = [
            'image/jpeg',
            'image/png',
            'image/gif'
        ];

        $gecerli_dosya_boyutu = (1024 * 1024 * 3);

        $dosya_uzantisi = $_FILES['dosya']['type'];

        if (in_array($dosya_uzantisi, $gecerli_dosya_uzantilari)) {
            if ($gecerli_dosya_boyutu >= $_FILES['dosya']['size']) {
                $yukle = move_uploaded_file($_FILES['dosya']['tmp_name'], '/var/www/html/upload/' . $_FILES['dosya']['name']);
                if ($yukle) {
                    echo '<h3>Dosya Yükleme Başarılı</h3>';
                    echo '<img src="upload/' . $_FILES['dosya']['name'] . '">';
                } else {
                    echo 'Yüklenirken Bir Sorun Oluştu.';
                }
            } else {
                echo 'Yüklenecek dosya en fazla 3MB olabilir';
            }
        } else {
            echo 'Dosya Türü Sadece jpeg, png veya gif olabilir.';
        }
    } else {
        echo 'Dosya Yüklenirken Bir Sorun Oluştu.';
    }
}

?>
