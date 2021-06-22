<?php
    echo 'IP Adresi: '. $_SERVER['REMOTE_ADDR'];
    echo '<br />';
    echo 'Uzak Host: '. gethostbyaddr($_SERVER['REMOTE_ADDR']);
    echo '<br />';
    echo 'İnternet Tarayıcısı: '. $_SERVER['HTTP_USER_AGENT'];
    echo '<br />';
    echo 'Geldiği Adres: '. $_SERVER['HTTP_REFERER'];
    echo '<br />';
    echo 'Tarayıcı Dili: '. $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    echo '<br />';
    echo 'Sıkıştırma İsteği: '. $_SERVER['HTTP_ACCEPT_ENCODING'];
    echo '<br />';
    echo 'Sunucu Protokolü: '. $_SERVER['SERVER_PROTOCOL'];
    echo '<br />';
    echo 'Karakter Seti: '. $_SERVER['HTTP_ACCEPT_CHARSET'];
    echo '<br />';
    echo 'İstek Metodu: '. $_SERVER['REQUEST_METHOD'];
    echo '<br />';
    echo 'Uzak Port: '. $_SERVER['REMOTE_PORT'];
    echo '<br />';
    echo 'Gerçek IP (Proxy ile gelmişse): '. $_SERVER['HTTP_X_FORWARDED_FOR'];
    echo '<br />';
    echo 'Çerezler: '. $_SERVER['HTTP_COOKIE'];
    echo '<br />';
    echo 'IP Adresi: '.getenv('REMOTE_ADDR');
?>