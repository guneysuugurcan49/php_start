<?php

    //setcookie() ile oluşturulur
    //$_cookie ile diziden çekilir

    setcookie('site', 'udemy', time() + 10);//cookie oluşturduk

    setcookie('site', 'test', time() - 10);//cooki silmek için kullanılır
    print_r($_COOKIE);

?>