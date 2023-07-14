<?php

//touch('isim' , 'oluşturulma zamanı') fonksiyonu ile dosya oluşturulur

//touch('test.txt')

/*
    fopen() dosyayı açmamızı sağlar
    fclose() dosyayı kapatmamızı sağlar
    fwrite() dosyaya birşeyler yazmamızı sağlar
    fread() tüm içeriği okur
    fgets() dosyayı satır satır okumamızı sağlar
    feof() dosyanın sonuna gelinip gelinmediğini kontrol eder
    filesize() dosya karakter sayısını gösterir
    unlink() dosyayı silmek için kullanılır
    

    */
 /*
    r okumak için aç
    r+ okumak ve yazmak için aç
    w yazmak için aç(dosya yok ise oluşturulur varsa üstüne yazılır)
    w+ okumak ve yazmak için aç
    a yazmak için aç
    a+ okumak ve yazmak için aç
*/
$icerik = 'Ugurcan Guneysu' . rand(0,100) . "\n";

$dosya = fopen('test.txt', 'a+');

 //   fwrite($dosya, $icerik);
   //echo filesize('text.txt');
//echo fread($dosya, filesize('test.txt'));//okunanı yazdırdık
//bütün dosya içeriğini okumak için filesize() kullandık


while(!feof($dosya))//satır satır okuduk
{
    echo fgets($dosya) . '<br>';
}

fclose($dosya);
unlink('test2.txt');

?>