<?php

/*
    strlen() ifadenin toplam karakter sayısını verir
    strstr() ifade içerisinde değer aramamızı sağlar
    strpos() ifade içinde aranan değerin indis numarasını verir
    ucwords() her kelimenin baş harfini büyütmek için kullanılır
    ucfirst() cümlenin ilk harfini büyütür
    strtolower() büyük yazılan harfleri küçük yapar
    strtolower() küçük yazılan harfleri büyük yapar
    trim() ifadenin tümünden istenilmeyen karakterleri temizler 
    ltrim() ifadenin sol tarafında istenilmeyen karakterleri temizler
    rtrim() ifadenin sağ tarafında istenilmeyen karakterleri temizler
    substr() karakteri bölmemizi sağlar
    str_replace() ifadenin içeriğini değiştirmemizi sağlar
    str_repeat() karakteri tekrar etmemizi sağlar
*/
$str = 'Ugurcan Guneysu';
//echo strlen($str);
//echo strlen('Ugurcan Guneysu');
//echo strstr('Ugurcan Guneysu','Guneysu');
//echo strpos('Ugurcan Guneysu','u');
//echo ucwords('ugurcan guneysu');
//echo ucfirst('ugurcan guneysu');
//echo strtolower('Ugurcan guneysu');
//echo strtoupper('Ugurcan guneysu');

$str2 = '-Ugurcan-Guneysu-';
//echo trim($str2,'-');
//echo ltrim($str2,'-');
//echo rtrim($str2,'-');

//echo substr($str,4,9);
/*
$str3 = 'Ugurcan Guneysu';
//echo str_replace('Guneysu','Dede',$str3);
echo str_replace(
    ["Ugurcan","Guneysu"],
    ["Turan","Dede"],
    $str3
);
*/

//echo str_repeat('*',12);

for($i=0;$i<=10;$i++)
{
    $kelebek = ($i <= 5 ? $i:(10-$i));
    echo str_repeat('***',$kelebek) . '<br>';//şekil
}
?>