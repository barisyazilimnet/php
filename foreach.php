<?php
$meyveler=array("elma","armut","erik");
foreach($meyveler as $yeni){
    echo $yeni."<br>";
}

echo"<br><br>";

$yaz=0;
$ogrenciler=array(1=>"128376","Furkan","AYDIN","217382","Hüseyin","YAŞAR","239048","Çağrı","ÖZTÜRK");
foreach ($ogrenciler as $aktar){
    echo $aktar."  ";
    $yaz++;
    if ($yaz%3==0){echo "<br>";}
}

echo"<br><br>";

$yaz=0;
$ogrenciler=array(1=>"128376","Furkan","AYDIN","217382","Hüseyin","YAŞAR","239048","Çağrı","ÖZTÜRK");
foreach ($ogrenciler as $aktar){
    echo $aktar."  ";
    $yaz++;
    if ($aktar=="Hüseyin"){break;}
}

echo"<br><br>";

$ailem=array(1=>"babam","annem","ablam","ben");
foreach($ailem as $sira => $deger){
    echo "$sira .sırada $deger var","<br>";
}
?>