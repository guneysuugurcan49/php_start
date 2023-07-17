<?php

/*
    mkdir(dosya_adi,chmod)
    rmdir() silmek için kullanılır
    file_exist() dizinin olup olmadığını kontrol eder
*/
mkdir('deneme');//dizin oluşturduk
rmdir('deneme');//dizin sildik

if(file_exists('test.txt')) {
    echo 'test klasörü mevcut.';
}
else {
    echo 'test klasörü mevcut değil.';
}
/*
    chmod()

    1.numara 0 ile başlar
    2.numara dosya sahibinin izinleri
    3.numara kullanıcı guruplarının izinleri
    4.numara geri kalan herkesin izinleri

    sayıları anlamları
    1=execute (işlem) izni
    2=yazma izni
    3=okuma izni
    izinler bu üç iznin toplamına göre belirlenir
*/
chmod('test.txt',0777);//kimin dosyaya ne kadar erişebileceğini belirtmek için kullanılır
?>