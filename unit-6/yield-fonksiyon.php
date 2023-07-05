<?php
/*
//range(altlimit,üstlimit) aralık arasında sayıları üretir ve diziye gönderir
function yazdir($altlimit,$ustlimit)
{
    $arr=[];
    for($i=$altlimit;$i<=$ustlimit;$i++)
    {
        $arr[] = $i;
    }
    return $arr;
}
$sayilar=yazdir(0,1000);
print_r($sayilar);
*/

//yield return e benzer ama işlemi sürdürmeye devam eder
//yield üreteç olarak kullanılır
//memory_get_usage() kaç bayt alan kullanıldığını yazar


function yazdir($altlimit,$ustlimit)
{
    for($i=$altlimit;$i<=$ustlimit;$i++)
    {
        yield $i;
    }
}
$sayilar = yazdir(0,100);
foreach($sayilar as $sayi)
{
    echo $sayi . '<br>';
}

?>