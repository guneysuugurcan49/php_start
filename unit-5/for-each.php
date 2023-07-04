<?php

$sayilar = [0,1,2,3,4,5,6,7,8,9,10];

foreach($sayilar as $sayi)
{
    print $sayi . '<br>';
}
$uyeBilgi = [
    'name' => 'ugurcan',
    'surname' => 'guneysu',
    'age' => 21
];
foreach($uyeBilgi as $u => $bilgi)
{
    print $u . ':' . $bilgi .'<br>';
}
?>