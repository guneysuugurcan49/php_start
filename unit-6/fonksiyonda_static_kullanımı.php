<?php
/*
function say()
{
    $sayi =1;
    echo $sayi . '<br>';
    $sayi++;
}
say();
say();
say();
say();
*/
function say()
{
    static $sayi =1;//
    echo $sayi . '<br>';
    $sayi++;
}
say();
say();
say();
say();

function yazdir($kelime)
{
    static $kelimeler = [];
    $kelimeler[] = $kelime;
    return $kelimeler;
}
yazdir('ugurcan');
yazdir('guneysu');
$kelimeler =  yazdir('ogrenci');
print_r($kelimeler);
//declare(strict_types = 1) sadece aynı tür değerlerle işlem yapar
?>

