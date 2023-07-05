<?php
/*
    array_values() dizideki değerleri başka diziye aktarmada kullanılır
    array_push() dizinin sonuna yeni eleman eklemek için kullanılır
    array_unshift() dizinin başına yeni eleman eklemeye yarar
    array_keys() dizinin anahtarlarını sıralamak için kullanır
    current() dizinin ilk elemanını bulmak için kullanılır
    end() dizinin son elemanını verir
    next() ilken sonraki elemanı alır
    prev() sondan bir önceki elemanı alır
    reset() diziyi sıfırlar (baştan başlamasını sağlar)
    extract() dizinin anahtarlarını değişken gibi kullanmayı sağlar
    asort() dizideki değerleri küçükten büyüğe(A-Z) sıralar
    arsort() dizideki değerleri büyükten küçüğe sıralar
    ksort() dizideki anahtarları küçükten büyüğe sıralar(A-Z)
    krsort() dizideki anahtarları büyükten küçüğe sıralar
    
*/
$arr = [
    'name' => 'ugurcan',
    'surname' => 'guneysu'
];

$arr2 = array_values($arr);
//print_r($arr2);

$arr = ['Ugurcan','Guneysu'];
array_push($arr,'Ogrenci',21);
//print_r($arr);

$arr = ['Guneysu',21];
array_unshift($arr,'Ugurcan');
//print_r($arr);

$arr = [
    'name' => 'Ugurcan',
    'surname' => 'Guneysu',
    'a' => [
        'b' => [
            'c' => 'd'
        ]
    ]    
];
$keys = array_keys($arr);
//print_r($keys);

//iç içe dizilerde array_keys kullanımı
function _array_keys($arr)
{
    static $keys = [];
    foreach($arr as $key => $val)
    {
        array_push($keys,$key);
        if(is_array($val))
        {
            _array_keys($val);
        }
    }
    return $keys;
}
$keys = _array_keys($arr);
//print_r($keys);
/*
$arr = ['Ugurcan','Guneysu','Ogrenci',21];
echo current($arr) . '<br>';
echo end($arr) . '<br>';
echo prev($arr) . '<br>';
echo next($arr) . '<br>';
echo prev($arr) . '<br>';
echo prev($arr) . '<br>';
echo reset($arr) . '<br>';
echo prev($arr) . '<br>';
echo next($arr) . '<br>';
*/
/*
$arr = [
    'name' => 'Ugurcan',
    'surname' => 'Guneysu',
    'age' => 21
];
extract($arr);
print $name . '<br>';
print $surname . '<br>';
print $age;
*/
$arr = [2,1,8,6,4,0];
//print_r($arr);
asort($arr);
//print_r($arr);
arsort($arr);
//print_r($arr);

$arr = [
    'c' => '3.deger',
    'a'=> '1.deger',
    'd' => '4.deger',
    'b' => '2.deger'
];
ksort($arr);
print_r($arr);
krsort($arr);
print_r($arr);

?>