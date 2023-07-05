<?php

/*
    print_r() bir dizinin okunabilir şekilde yapısını gösterir
    var_dump() bir dizinin okunabilir şekilde yapısını daha programca gösterir
    explode() belli bir karakterle ifadeyi parçalayıp dizi haline getirir
    implode()bir diziyi belli karakterle birleştirip string ifadeye dönüştürür
    count() dizinin kaç elemanı olduğunu bulmamızı sağlar
    is_array() değişkenin dizi olup olmadığına bakar
    shuffle() diziyi karıştırarak yazdırır
    array_combine() iki farklı diziyi anahtar değer olarak birleştirmek için kullanılır
    array_count_values() dizide tekrarlanan elemanın kaç kez tekrarlandığını bulmak için kullanılır
    array_flip() anahtar ile değerlerin yerlerini değiştirir
    array_key_exist() dizi içinde belirlenen anahtarın olup olmadığını kontrol eder
*/
$arr = [
    'name' => 'ugurcan',
    'surname' => 'guneysu',
    'age' => 21
];
//print_r($arr);
//var_dump($arr);

$deneme ='Ugurcan,Guneysu,Ogrenci';
$arr = explode(',',$deneme);

//print_r($arr);

$string = implode('?',$arr);
//echo $string;

//echo count($arr);
/*
if(is_array($string))
{
    echo 'ifade dizidir';
}
else
{
    echo 'ifade dizi değildir';
}
*/
$arr = [1,2,3,4,5,6,7,8,9,10];
shuffle($arr);
//print_r($arr);

$keys = ['name','surname'];
$values = ['Ugurcan','Guneysu'];

$arr = array_combine($keys,$values);
//print_r($arr);

$arr = ['ugurcan','guneysu','ugurcan',21,21,21];
$arr2 = array_count_values($arr);
//print_r($arr2);

$arr = [
    'name' => 'ugurcan',
    'surname' => 'guneysu',
    'age' => 21
];
$arr2=array_flip($arr);
//print_r($arr2);

$arr = [
    'name' => 'ugurcan'
];
if(array_key_exists('name',$arr))
{
    echo 'dizide name anahtarı var ';
}
else
{
    echo 'dizide name anahtarı yok';
}

?>