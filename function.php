<?php
function aylar($sayi){
    $aylar=array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
    return $aylar[$sayi-1];
}
$gun=10;
$ay=aylar(12);
$yil=2019;
echo $gun,"&nbsp",$ay,"&nbsp",$yil;

echo"<br><br>";

echo"<b>ÖDEV</b><br><br>";

function basamaklar($sayi){
    $birler=$sayi%10;
    $onlar=(($sayi-$birler)/10)%10;
    $yuzler=(($sayi-$birler)-$onlar*10)/100;
    return array("birler"=>$birler,"onlar"=>$onlar,"yüzler"=>$yuzler);
}
$ucbasamaklisayi=956;
$donen_dizi=basamaklar($ucbasamaklisayi);
echo "<b>Sayımız :</b>".$ucbasamaklisayi,"<br>",
     "<b>Birler :</b>".$donen_dizi["birler"],"<br>",
     "<b>Onlar :</b>".$donen_dizi["onlar"],"<br>",
     "<b>Yüzler :</b>".$donen_dizi["yüzler"],"<br>";

echo"<br><br>";

function bul($sayilar){
    $eb=$sayilar[0];
    $ek=$sayilar[0];
    $toplam=0;
    $sayac=0;
    foreach($sayilar as $deger){
        $ek=($deger<$ek)?$deger:$ek;
        $eb=($deger>$eb)?$deger:$eb;
        $toplam+=$deger;
        $sayac++;
    }
    return array("ek"=>$ek,"eb"=>$eb,"ort"=>$toplam/$sayac);
}
$dizi=array(61,11,7,34,52,27,64,68,44,17,99,82,56);
$sonuc=bul($dizi);
echo"<b>En küçük sayı :</b>".$sonuc["ek"],"<br>",
    "<b>En büyük sayı :</b>".$sonuc["eb"],"<br>",
    "<b>Ortalama :</b>".$sonuc["ort"];

echo"<br><br>";

function ortalama($not1,$not2,$not3="yok"){
    if($not3=="yok"){
        $ort=($not1+$not2)/2;
    }else {
        $ort=($not1+$not2+$not3)/3;
    }return $ort;
} 
echo"<b>Ortalama :</b>".ortalama(60,90),"<br>",
    "<b>Ortalama :</b>".ortalama(60,90,30);

echo"<br><br>";

function daire($r,$pi="3.14"){
    $sonuc=$pi*$r*$r;
    return $sonuc;
}
echo"<b>Alan :</b>".daire(4,3),//ekrana Alan :48 yazar. $pi=3 kullanıldı
    "<br>",
    "<b>Alan :</b>".daire(4);//ekrana Alan :50.24 yazar. $pi=3.14 kullanıldı

echo"<br><br>";

function yuzdesi($sayi,$oran="100"){
    return ($sayi*$oran)/100;
}
echo "<b>60'ın %12'si :</b>".yuzdesi(60,12),
     "<br>",
     "<b>70'in %100'ü :</b>".yuzdesi(70);

echo"<br><br>";

$sayi=15;
function iki_kat($sayi){
    $sayi=$sayi*2;
    return $sayi;
}
echo iki_kat($sayi), // ekrana 30 yazar
    "<br>",
    $sayi; // ekrana 15 yazar

echo"<br><br>";

$sayi=15;
function iki_kati($sayi){
    global $sayi;
    $sayi=$sayi*2;
    return $sayi;
}
echo iki_kati($sayi), // ekrana 30 yazar
    "<br>",
    $sayi; // ekrana 30 yazar


echo"<br><br>";

$toplam=25;
echo "<b>Toplam :</b>".$toplam, // Toplam :25
     "<br>";
function ekle($sayi1,$sayi2){
    global $toplam;
    $toplam+=$sayi1+$sayi2;
}
ekle(7,17);
echo"<b>Toplam :</b>".$toplam; // Toplam :49

echo"<br><br>";

$kullanici_adi="BBT Shadow Dance";
$sifre="159753789456123.baris";
function giris($user,$password){
    global $kullanici_adi;
    global $sifre;
    if($user==$kullanici_adi and $password=$sifre){
        $login=true;
    }else{
        $login=false;
    } return $login;
}
if (giris("BBT Shadow Dance","159753789456123")==true){
    echo "Giriş Başarılı";
}else{
    echo "Hatalı kullanıcı yada şifre!";
}
echo"<br>";
if (giris("BBT Shadow Dance","159753789456123.baris")==true){
    echo "Giriş Başarılı";
}else{
    echo "Hatalı kullanıcı adı yada şifre!";
}

echo "<br><br>";

function say(){
    $sayac=0;
    $sayac++;
    return $sayac;
}
echo "<b>Sayaç :</b>".say(), // ekrana Sayaç :1 yazar
     "<br>",
     "<b>Sayaç :</b>".say(), // ekrana Sayaç :1 yazar
     "<br>",
     "<b>Sayaç :</b>".say(); // ekrana Sayaç :1 yazar

echo "<br><br>";

function sayi(){
    static $sayac=0;
    $sayac++;
    return $sayac;
}
echo "<b>Sayaç :</b>".sayi(), // ekrana Sayaç :1 yazar
     "<br>",
     "<b>Sayaç :</b>".sayi(), // ekrana Sayaç :2 yazar
     "<br>",
     "<b>Sayaç :</b>".sayi(); // ekrana Sayaç :3 yazar

echo"<br><br>";

function hata($metin){
    static $mesaj="<b><u>Oluşan Hatalar :</u></b><br>";
    $mesaj.=$metin."<br>";
    return $mesaj;
}
$tam_metin=hata("Veritabanı baglantısı yapılamadı!");
$tam_metin=hata("Tabloda ilgili kayıtlara ulaşılamadı!");
$tam_metin=hata("Listeleme yapılamadı!");
// tüm metinler $mesaj degişkenine eklendi
echo $tam_metin;
?>