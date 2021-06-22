<?php
function ortalama($not1,$not2,$not3){
    $ort=($not1+$not2+$not3)/3;
    return $ort;
}
echo"<b>Ortalama :</b>".ortalama(60,90,120);//hata düzeltildi
?>