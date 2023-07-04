<?php

    function deneme()
    {
        echo func_num_args() . '<br>';//toplam parametre sayısı sayısı
        print_r(func_get_args()) . '<br>';//parametreleri değerlerini verir
        echo func_get_arg(1);//parametre değerlerinden birini yazmayı sağlar
    }
    deneme('ugurcan','matematik','biyoloji','satranç');

?>