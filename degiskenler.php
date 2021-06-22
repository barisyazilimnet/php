<?php
$anapara=6000;
$faiz_orani=20;
$zaman=4;
$gelen_faiz=$anapara*$faiz_orani*$zaman/100;
$bankada_biriken_toplam_para=$anapara+$gelen_faiz;
echo "bankada biriken toplam para :$bankada_biriken_toplam_para";

echo"<br><br>";

$vize=85;
$final=55;
$ortalama=$vize*40/100+$final*60/100;
echo"ortalama :$ortalama";

echo"<br><br>";

$Adana=01;
$Antalya=07;
$Gaziantep=27;
$İstanbul=34;
$İzmir=35;
echo"<b>Antalya :</b>".$Antalya; //Ekrana 7 yazar

echo"<br><br>";

$a=10;
$b=0;
$sonuc=@($a/$b); //Bu sonuçta hata vardır.Ekranda INF yazar
$sonuc1=($b/$a); //Bu sonuçta hata yoktur ama sonuç 0 çıkar
echo"<b>Sonuç :</b>".$sonuc,"<br>","<b>Sonuç :</b>".$sonuc1;

echo"<br><br>";

$hız=150;
$saat=5;
$mesafe=$hız*$saat;
echo"<b>A şehri ile B şehri arasındaki mesafe :</b>".$mesafe; 

echo"<br><br>";

$ad="Barış KURT";
$bulundugumuzyil=2019;
$dogumyili=2000;
$yas=$bulundugumuzyil-$dogumyili;
echo"<b>Adı :</b>".$ad,"<br><b>Yaşı :</b>".$yas;

echo"<br><br>";

$a=7;
$b=11;
$cevre=($a+$b)*2;
$alan=$a*$b;
echo"<b>Çevresi :</b>".$cevre,"<br><b>Alan :</b>".$alan;

echo"<br><br>";

$sayi1=10;
$sayi2=20;
$sayi3=30;

if($sayi1>$sayi2 and $sayi1>$sayi3){
    echo "$sayi1 girilen üç sayının en büyügüdür";
} else if($sayi2>$sayi1 and $sayi2>$sayi3){
    echo "$sayi2 girilen üç sayının en büyügüdür";
} else{
    echo "$sayi3 girilen üç sayının en büyügüdür";
}

echo"<br><br>";
?>