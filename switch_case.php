<?php
$sayi=5;
switch($sayi){
case "5";
echo "<b>5</b>"; break;
default:
echo "<b>4</b>";
}

echo"<br><br>";

$takiminiz="Galatasaray";
switch($takiminiz){
    case "Galatasaray";
    echo "<b>Tuttuğunuz Takım :</b> Galatasaray 1905 yılında kurulmuştur. Stadyumu İstanbul ilinde bulunmaktadır."; break;
    case "Trabzonspor";
    echo "<b>Tuttuğunuz Takım :</b> Trabzonspor 1961 yılında kurulmuştur. Stadyumu Trabzon ilinde bulunmaktadır."; break;
    case "Beşiktaş";
    echo "<b>Tuttuğunuz Takım :</b> Beşiktaş 1903 yılında kurulmuştur. Stadyumu İstanbul ilinde bulunmaktadır."; break;
    case "Fenerbahçe";
    echo "<b>Tuttuğunuz Takım :</b> Fenerbahçe 1907 yılında kurulmuştur. Stadyumu İstanbul ilinde bulunmaktadır."; break;
    default:
    echo "<b>Takım hakkında bilgi veritabanımızda bulunamadı.</b>";
}

echo"<br><br>";

$sayi=1;
$sayi1=2;
$sembol="+";
switch($sembol){
   case "-";
   $sonuc=$sayi-$sayi1;
   echo $sonuc; break;
   case "+";
   $sonuc=$sayi+$sayi1;
   echo $sonuc; break;
   case "*";
   $sonuc=$sayi*$sayi1;
   echo $sonuc; break;
   case "/";
   $sonuc=$sayi/$sayi1;
   echo $sonuc; break;
default:
   echo "<b>Böyle bir sembol bulunamadı.</b>";
}
?>