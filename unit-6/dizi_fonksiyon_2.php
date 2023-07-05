<?php
/*
    array_map() dizi elemanlarını istenilen işlemi yaparak döndürür
    array_filter() dizide değerleri boş olan karakterleri çıkarmaya yarar
    array_merge() iki diziyi birleştirmek için kullanılır
    array_rand() diziden rastgele değer seçmeye yarar 
    array_reverse() fonksiyonu tersten yazmayı sağlar
    array_search() dizide değer aramak için kullanılır(varsa indisini verir)
    in_array() dizide değerin olup olmadığını kontrol eder
    array_shift() dizinin ilk elemanını seçerek diziden çıkartır
    array_pop() dizinin son elemanını seçerek çıkartır
    array_slice() dizinin belli bir aralığını seçmek için kullanılır
    array_sum() dizinin elemanlarının toplamını bulmak için kullanılır
    array_product() dizinin elemanlarının çarpımını bulmak için kullanılır
    array_unique() dizide tekrarlanan değerleri siler
*/
function filtrele($val)
{
    return $val * 4;
}
$arr = [1,2,3,4,5];
$arr2 = array_map('filtrele', $arr );
//print_r($arr2);

$arr = ['','ugurcan','','guneysu'];
//print_r($arr);
$arr = array_filter($arr);
//print_r($arr);

$arr1 = [1,2,3,4,5];
$arr2 = [6,7,8,9,10];

$arr = array_merge($arr1,$arr2);
//print_r($arr);

$arr = [
    'name' => 'Ugurcan',
    'surname' => 'Guneysu',
    'age' => 21
];
$random = array_rand($arr, 2);
$values = array_map(function($key) use($arr)//global olarak kullanmak için
{
    return $arr[$key];
},$random);
//print_r($values);

$arr = [1,3,3,4,5];
//print_r($arr);
$arr = array_reverse($arr);
//print_r($arr);

$arr = [
    'name' => 'Ugurcan',
    'surname' => 'Guneysu',
    'age' => 21,
    'a' => [
        'b' => [
            'c' => 'd'
        ]
    ]
]; 
$deneme = array_search('Ugurcan',$arr);
/*
function _array_search($cur_val,$arr)
{
    foreach($arr as $key => $val)
    {
        if($val == $cur_val)
        {
            return true;
        }
        if(is_array($val))
        {
            return _array_search($cur_val, $val);
        }
    }
    return false;
}
$deneme = _array_search('d',$arr);
if($deneme)
{
    echo 'dizide bulundu';
}
else
{
    echo 'dizide bulunamadı';
}
*/
/*
$arr = [1,2,3,4,5];
if(in_array('4',$arr))
{
    echo 'dizide var';
}
else
{
    echo 'dizide yok';
}
*/
/*
$arr = [1,2,3,4,5];
$ilk_eleman = array_shift($arr);
print_r($arr);
$son_eleman = array_pop($arr);
print_r($arr);
*/

$arr = [1,2,3,4,5,6,7,8,9];
//$arr2 = array_slice($arr,3,2);//üçüncü indisten başla iki eleman seç
$arr2 = array_slice($arr, -2);//sondan iki elemanı seçer
//print_r($arr2);
/*
$toplam = array_sum($arr);
echo $toplam . '<br>' ;//alt satıra geçmek için kullanılır
$carpim = array_product($arr);
echo $carpim;
*/

$arr = ['ugurcan','ugurcan','guneysu',21,21,21];
$arr2 = array_unique($arr);
print_r($arr);
print_r($arr2);
?>