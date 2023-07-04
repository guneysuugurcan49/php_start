<?php
    /*
    function deneme()
    {
        return  "HELLO";
    }
    
    $a = deneme();
    echo $a;//print le aynı işlevi görür

    
    function sum($num1 , $num2)
    {
        return ($num1 + $num2);
    }
    $summ = sum(3,4);
    echo $summ;
    */
    $name = 'ugurcan';

    function namesurname($surname)
    {
        global $name;
        return $name . ' ' . $surname;
        //return $GLOBALS['name'] . ' ' . $surname;
    }
   // echo namesurname('guneysu');

$write = "hello world";
echo substr($write,0,4);//substr kısaltma için kullanılır
//strlen() toplam karakter sayısını bulur
?>