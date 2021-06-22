<?php
$gunler=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
echo "<b>$gunler[4]</b>"; // ekrana cuma yazar

echo"<br><br>";

$gunler=array(5=>"Pazartesi",6=>"Salı",7=>"Çarşamba",8=>"Perşembe",9=>"Cuma",10=>"Cumartesi",11=>"Pazar");
echo "<b>$gunler[10]</b>"; // ekrana cumartesi yazar

echo"<br><br>";


$gunler=array(5=>"Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
echo "<b>$gunler[6]</b>"; // ekrana salı yazar

echo"<br><br>";

$sampiyonlarligiagrubu=array("Trabzonspor","Real Madrid CF","Liverpool FC","AC Milan");
echo "<b>".$sampiyonlarligiagrubu[0]."</b>"; #ekrana trabzonspor yazar

echo"<br><br>";

$kirtasiyeurunleri[0]="Kalem";
$kirtasiyeurunleri[1]="Defter";
$kirtasiyeurunleri[2]="Silgi";
echo "<b>$kirtasiyeurunleri[1]</b>"; // ekrana Defter yazar

echo"<br><br>";

$gunler[0]="Pazartesi";
$gunler[1]="Salı";
$gunler[2]="Çarşamba";
$gunler[3]="Perşembe";
$gunler[4]="Cuma";
$gunler[5]="Cumartesi";
$gunler[6]="Pazar";
echo "<b>Bugün günlerden :$gunler[3]</b>"; #ekrana Perşembe yazar

echo"<br><br>";

$gunler[]="Pazartesi";
$gunler[]="Salı";
$gunler[]="Çarşamba";
$gunler[]="Perşembe";
$gunler[]="Cuma";
$gunler[]="Cumartesi";
$gunler[]="Pazar";
echo "<b>Bugün günlerden :$gunler[4]</b>"; #ekrana cuma yazar

echo"<br><br>";

$personel["Güvenlik"]="Necla AYDIN";
$personel["Sekreter"]="Selin ALTUNTAŞ";
$personel["Müdür"]="Halil YURDUGÜL";
$personel["Hizmetli"]="Hikmet KIRBAŞ";
echo "<b>".$personel["Müdür"]."</b>"; // ekrana Halil YURDUGÜL yazar

echo"<br><br>";

$egitselverimadenciligi["Hacettepe"]="Halil YURDUGÜL";
$egitselverimadenciligi["Gazi"]="Tolga GÜYER";
$egitselverimadenciligi["KSU"]="Furkan AYDIN";
echo "<b>".$egitselverimadenciligi["KSU"]."</b>";

echo"<br><br>";

$vikingeninfinityotel["kat1"]["oda1"]="Ali";
$vikingeninfinityotel["kat1"]["oda2"]="Ahmet";
$vikingeninfinityotel["kat1"]["oda3"]="Ömer";

$vikingeninfinityotel["kat2"]["oda1"]="Hasan";
$vikingeninfinityotel["kat2"]["oda2"]="Kenan";
$vikingeninfinityotel["kat2"]["oda3"]="Mert";

$vikingeninfinityotel["kat3"]["oda1"]="Ayşe";
$vikingeninfinityotel["kat3"]["oda2"]="Fatma";
$vikingeninfinityotel["kat3"]["oda3"]="Hatice";
//echo $vikingeninfinityotel["kat2"]; Hata verir
echo"<b>202 numaralı odada kalan müşteri :</b>".$vikingeninfinityotel["kat2"]["oda2"]; //Ekrana Kenan yazar

echo"<br><br>";

$vikingeninfinityotel=array(
    "kat1"=>array("oda1"=>"Ali","oda2"=>"Ahmet","oda3"=>"Ömer"),
    "kat2"=>array("oda1"=>"Hasan","oda2"=>"Kenan","oda3"=>"Mert"),
    "kat3"=>array("oda1"=>"Ayşe","oda2"=>"Fatma","oda3"=>"Hatice")
);
echo"<b>203 numaralı odada kalan müşteri :</b>".$vikingeninfinityotel["kat2"]["oda3"]; //Ekrana Mert yazar

echo"<br><br>";

$temelprogramlamanotları=array(
    921=>array("quiz"=>52,"vize"=>64,"final"=>35),
    930=>array("quiz"=>98,"vize"=>90,"final"=>70),
    961=>array("quiz"=>15,"vize"=>45,"final"=>63)
);
echo"<b>Öğrenci notu :</b>".$temelprogramlamanotları[961]["final"]; //Ekrana 63 yazar

echo"<br><br>";

$uretimler=array(
    2015=>array("buğday"=>145,"arpa"=>90,"mısır"=>210,"tütün"=>55),
    2016=>array("buğday"=>167,"arpa"=>60,"mısır"=>120,"tütün"=>65),
    2017=>array("buğday"=>180,"arpa"=>45,"mısır"=>130,"tütün"=>121),
    2018=>array("buğday"=>317,"arpa"=>120,"mısır"=>134,"tütün"=>152),
    2019=>array("buğday"=>62,"arpa"=>261,"mısır"=>34,"tütün"=>135)
);
echo"<b>Üretim :</b>".$uretimler[2016]["buğday"]; //Ekrana 167 yazar

echo"<br><br>";

$Agrubu=array("Trabzonspor","Real Madrid CF","Liverpool FC","AC Milan");
echo"<b>Şampiyon :</b>".$Agrubu[1]; //Ekrana Real Madrid CF yazar

echo"<br><br>";

$not=array(
    "Barış KURT"=>array("vize"=>"sınav1","final"=>"sınav2","not ortalaması"=>55)
);
echo"<b>Adı :</b>Barış KURT<br><b>Not ortalaması :</b>".$not["Barış KURT"]["not ortalaması"]; //Ekrana Barış KURT ve 55 yazar

echo"<br><br>";

$ogrenci=array(
    "öğrenci1"=>array("adı"=>"Barış KURT","sınav1"=>50,"sınav2"=>60)
);
$ortalama=($ogrenci["öğrenci1"]["sınav1"]+$ogrenci["öğrenci1"]["sınav2"])/2;
echo"<b>Adı :</b>".$ogrenci["öğrenci1"]["adı"],"<br>","<b>Not ortalaması :</b>".$ortalama; //Ekrana Barış KURT ve 55 yazar

echo"<br><br>";

$plakalar=array(
    "plakalar"=>array("Adana"=>01,"Antalya"=>07,"Gaziantep"=>27,"İstanbul"=>34,"İzmir"=>35)
);
echo"<b>Antalya :</b>".$plakalar["plakalar"]["Antalya"]; //Ekrana 7 yazar

echo"<br><br>";

$Plaka["Adana"]=01;
$Plaka["Antalya"]=07;
$Plaka["Gaziantep"]=27;
$Plaka["İstanbul"]=34;
$Plaka["İzmir"]=35;
echo"<b>Antalya :</b>".$Plaka["Antalya"]; //Ekrana 7 yazar

echo"<br><br>";

$dizi=array(
    "dizi"=>array(50,20,30)
);
$dizi["dizi"][1]=$dizi["dizi"][0]+$dizi["dizi"][1];
$dizi["dizi"][2]=$dizi["dizi"][1]+$dizi["dizi"][2];
echo"<b>İndisler toplamı :</b>".$dizi["dizi"][2]; //Ekrana 100 yazar

echo"<br><br>";

$carpim[0][0]=1;
$carpim[0][1]=2;
$carpim[0][2]=3;

$carpim[1][0]=2;
$carpim[1][1]=4;
$carpim[1][2]=6;

$carpim[2][0]=3;
$carpim[2][1]=6;
$carpim[2][2]=9;

$carpim[1][1]=9;
$carpim[2][2]=4;
echo"<b>Sonuç :</b>".$carpim[1][1]; //Ekrana 9 yazar

echo"<br><br>";

$carpim=array(
    "çarpım0"=>array(1,2,3),
    "çarpım1"=>array(2,4,6),
    "çarpım2"=>array(3,6,9)
);
echo"<b>Sonuç :</b>".$carpim["çarpım1"][1]; //Ekrana 2 yazar

echo"<br><br>";

$matrix[]=0;
$matrix[]=1;
$matrix[]=0;
$matrix[]=1;
$matrix[]=0;
$matrix[]=1;
echo $matrix[0],$matrix[1],$matrix[2],"<br>",$matrix[3],$matrix[4],$matrix[5]; //Ekranda dizilerin sırasına ve yerine göre dizilişi çıkar

echo"<br><br>";

$ogrenciler[19060261036]="Barış KURT";
$ogrenciler[19060261040]="Hüseyin DEMİRAYAK";
$ogrenciler[19060261055]="Mevlüt DEMİREL";
$ogrenciler[19060261058]="Samet TOMAN";
$ogrenciler[19060261059]="Rafık ÜNLÜ";
$ogrenciler[19060261060]="Kazım YEDİVEREN";
$ogrenciler[19060261061]="Cengiz HAN";
$ogrenciler[19060261065]="İbrahim FELEK";
$ogrenciler[19060261066]="Zehra KURT";
$ogrenciler[19060261068]="Kazım KARABEKİR";
echo"<b>Öğrenci Adı Soyadı :</b>".$ogrenciler[19060261036];

echo"<br><br>";

$ogrenciler=array(19060261036=>"Barış KURT",19060261040=>"Hüseyin DEMİRAYAK",19060261055=>"Mevlüt DEMİREL",19060261058=>"Samet TOMAN",19060261059=>"Rafık ÜNLÜ",19060261060=>"Kazım YEDİVEREN",
                  19060261061=>"Cengiz HAN",19060261065=>"İbrahim FELEK",19060261066=>"Zehra KURT",19060261068=>"Kazım KARABEKİR");
echo"<b>Öğrenci Adı Soyadı :</b>".$ogrenciler[19060261036];

echo"<br><br>";

$sayi=array(
    "sayi0"=>array(1,2),
    "sayi1"=>array(3,4)
);
$toplam1=$sayi["sayi0"][0]+$sayi["sayi1"][1];
$toplam2=$sayi["sayi0"][1]+$sayi["sayi1"][0];
$toplam3=$sayi["sayi1"][0]+$sayi["sayi0"][1];
$toplam4=$sayi["sayi1"][1]+$sayi["sayi0"][0];
echo"<b>Sonuç :</b>".$toplam1,$toplam2,"<br><b>Sonuç :</b>".$toplam3,$toplam4;

echo"<br><br>";

$sayi=array(
    "sayi0"=>array(1,2),
    "sayi1"=>array(3,4)
);
$sonuc1=$sayi["sayi0"][0]*2+1;
$sonuc2=$sayi["sayi0"][1]*2+1;
$sonuc3=$sayi["sayi1"][0]*2+1;
$sonuc4=$sayi["sayi1"][1]*2+1;
echo"<b>Sonuç :</b>".$sonuc1,$sonuc2,"<br><b>Sonuç :</b>".$sonuc3,$sonuc4;

echo"<br><br>";

$sayi=array(
    "sayi0"=>array(1,2),
    "sayi1"=>array(3,4)
);
$cop=$sayi["sayi0"][1]-1;
$cop1=$sayi["sayi1"][0]-2;
$cop2=$sayi["sayi1"][1]-3;
echo"<b>Sonuç :</b>".$sayi["sayi0"][0],$cop,"<br><b>Sonuç :</b>".$cop1,$cop2;

echo"<br><br>";

$dizi=array(
    "dizi"=>array(1,2,3,4,5,6,7,8,9)
);
echo "<b>Sonuç :</b>".$dizi["dizi"][0],$dizi["dizi"][2],"<br><b>Sonuç :</b>".$dizi["dizi"][4],"<br><b>Sonuç :</b>".$dizi["dizi"][6],$dizi["dizi"][8];

echo"<br><br>";

$sanane[0]=5;
$sanane[1]=7;

$degisken=$sanane[0];
$sanane[0]=$sanane[1];
$sanane[1]=$degisken;

echo $sanane[0],$sanane[1];




?>