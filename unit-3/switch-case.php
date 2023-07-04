<?php

$a = 6;
switch($a)
{
    case 5:
        print " a nın degeri 5 tir.";
        break;
    case 8:
        print " a nın degeri 8 dır. ";
        break;
    case $a % 5 == 1:
        print "a nın 5 e bolumunden kalan 1 dir.";
        break;
    default:
        print "hicbir seye esit degil .";
        break;
}
?>