<?php

session_start();//session u başlatmak için kullanılır

$_session['kullanici_adi'] = 'Ugurcan Guneysu';
$_session['parola'] = '1233241';

//echo $_session['kullanici_adi'];

unset($_session['parola']);//session u kaldırmak için kullanılır

print_r($_session);

//session_destroy();//session u kapatmak için kullanılır

?>