<?php
function hesapla($not1,$not2){
    $toplam=($not1*40/100)+($not2*60/100);
    return $toplam;
    
}
$vize=50;
$final=60;
echo"Dersteki Temel Notun :".hesapla($vize,$final),
    "<br>Örnek İki :".hesapla(70,100);  
    echo"<br>";
    if($toplam>35){
        echo "geçti";
    } else{
        echo "kaldı";
}
?>