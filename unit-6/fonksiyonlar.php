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
    }
    echo namesurname('guneysu');
?>