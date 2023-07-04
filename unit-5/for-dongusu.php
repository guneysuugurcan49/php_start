<?php
/*
for($i=0;$i<10;$i++)
{
    print $i . '<br>';//<br> alt alta yazdırma
}
*/
/*
for($i=10;$i>0;$i--)
{
    print $i . '<br>';
}
*/
$arr = [
    'ugur',
    'mesut',
    'coskun',
    'ahmet'
];
print $arr[1] . '<br>';

//count dizinin eleman sayısını bulmak için kullanılır
for($i=0;$i<=(count($arr)-1);$i++)
//for($i=(count($arr)-1);$i>=0;i--)
{
    if($i==1) continue;
    print $arr[$i] .'<br>';
    if($i==2) break;

}


?>