<?php


/*
$deneme = function($parametre)
{
  return 'deneme' . ' ' .  $parametre;
};
echo $deneme('mesela');
*/
    $arr = [
        function()
        {
            return 'first function';
        },
        function()
        {
            return 'second function';
        },
        function()
        {
            return 'third function';
        }
    ];
echo $arr[rand(0,2)]();//rand(min,max) rastgele sayı üretimi
?>