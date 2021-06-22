<?php
//Tamsayılar
$sayi1=6;
$sayi2=-64;
$sayi3=61;
$sayi4=-54; //Onluk tabanda negatif sayı
$sayi5=065; //Sekizlik tabanda onluk karşılığı=53
$sayi6=0x2B; //Onaltılık tabanda onluk karşılığı=43 ayrıca 0X2B olarak da yazılabilir

echo"<br><br>";

//Metin
$atasozu="DR.Muhittin ŞAHİN der ki: 'Dert etme, Çözülür...'";
echo $atasozu;

echo"<br><br>";

//Boolean
$a=true;
$b=false;
$c=1; //$c=true
$d=0; //$d=false
echo $a;

echo"<br><br>";

//Sabit
define("pi",3.14); //Sabitler kullanılırken önüne $ işareti konulmaz ve adı çift tırnak içinde tanımlanır
echo pi; //Ekrana 3.14 yazar

echo "<br><br>";

//define("pi",3.14); //Doğru bir sabit tanımlanması yapılmıştır
//echo $pi; //Hata sabitin önüne $ konulmuş
//pi=3; //Hata sabitin değeri değiştirilmeye çalışılıyor
$alan=pi*2*2; //Burada herhangi bir hata yoktur alan hesaplaması için sabit kullanılmıştır
echo $alan;

echo"<br><br>";

define("ad","Barış KURT");
echo ad;

define("yas","20");
echo"<br>",yas;

echo"<br>",__FILE__; //bu dosyanın yolunu gösterir
echo"<br>",__LINE__; // yazılan satırın numarasını verir
echo"<br>",PHP_VERSION; // php versiyonunu verir

echo"<br><br>";

// chr()=verilen ascii koda karşılık veren karakteri verir.
// kalvye üzerindeki her karakterin ascii kodu vardır.
// ascii kodlar 0 ile 255 arasındadır
// chr($sayi) seklinde yazılır
echo "<b>Ascii kodu 77 olan karakter :</b>".chr(77)."<br><br>",
     "<b><u>Örnek :</u></b><br>",
     chr(73),chr(121),chr(105),"&nbsp;&nbsp;",chr(103),chr(117),chr(110),chr(108),chr(101),chr(114)."<br><br>";

     //ascii kodların karşılıgı olan karakterler
echo "<table border='3px'>",
     "<tr>",
     "<td>Ascii Kodu &nbsp;</td>",
     "<td>Karekter &nbsp;</td>",
     "</tr>";
for ($i=0; $i<=255; $i++){
   echo "<tr>",
        "<td><b>".$i."</b></td>",
        "<td>".chr($i)."</td>",
        "</tr>";
}
echo "</table>";

echo"<br><br>";

//echo rand(1,10); 1 ve 10 arasında bir sayı belirler.  her sayfa yenileme de sayı degişir.

$uret=rand(1,10);
echo "Bulunan sayı :".$uret,"<br>";
if($uret>=5){
    echo "Tebrikler bulunan sayı $uret oldugu için kazandınız";
}   else{
    echo "Maalesef bulunan sayı $uret oldugu için kaybettiniz";
}

echo"<br><br>";

//Sırasıyla aldığı metne karşılık gelen karmaşık md5 ve sha1 kodlarını verir. 
//Genelde kaydedilecek şifreleri şifrelemek için kullanılır.
$parola="erkan";
echo "Parola: $parola<br>";
echo "md5 kodu: ",md5($parola),"<br>";
echo "sha1 kodu: ",sha1($parola),"<br>";
 
if(md5($parola)=="a565ab1f3802afbf4d07c1674069d813")
   echo "şifre doğru<br>";
else
   echo "Şifre yanlış<br>";
 
if(sha1($parola)=="632b22dee62d75ff052311fda9bac96293f3aad8")
   echo "şifre doğru<br>";
else
   echo "Şifre yanlış<br>";

echo"<br><br>";

$kelime="kahramanmaraş  sütçü imam universitesi";
echo ucfirst($kelime),"<br>",$kelime;

echo"<br><br>";

// ltrim (” aaa “); sadece soldaki boşlukları siler.
// ltrim(“mobilhanem”,”m”) sadece soldaki m harfini siler obilhanem çıktısını verir
// rtrim (” aaa “); sadece sağdaki boşlukları siler.
// rtrim(“mobilhanem”,”m”) sadece sağdaki m harfini siler mobilhane çıktısını verir
$veri = "mobilhanem.com";

echo "Soldan m harfi Sil: ".ltrim($veri,"m");
echo " <br>Sağdan m harfi Sil: ".rtrim($veri,"m");

echo"<br><br>";

// Verilen metni verilen sayı kadar karakter gruplarına bölerek bir diziye dönüştürür. 
// Eğer sayı belirtilmezse, metni harf harf bölerek bir diziye atar.
$metin="Baris KURT";
$harfler=str_split($metin); // sayı belirtilmediğinden harf harf böler.
foreach($harfler as $harf)
   echo "<h3>".$harf."</h3>";

$metin1="Baris KURT";
$harfler1=str_split($metin1,2); // harfleri ikişerli gruplar halinde böler.
foreach($harfler1 as $harf1)
    echo "<h3>".$harf1."</h3>";

echo"<br><br>";

$dizi=array("Barış","KURT",5,6);
    echo $dizi[2],"<br>"; // dizi degişkeninin 2. indisi gösteriyor
    print_r($dizi); // dizi yi oldugu gibi yazdırır

$dizi1=array(4,56,8,52,3,9);
    echo "<br>".count($dizi1)."<br>"; //dizi de kaç eleman oldugu yazar
    print_r($dizi1);
    echo "<br>";
    sort($dizi1);// diziyi küçükten büyüge sıralar
    print_r($dizi1);
    echo "<br>";
    rsort($dizi1);// büyükten küçüge sıralar
    print_r($dizi1);
    echo "<br>".max($dizi1);// dizideki max degeri gösteirir
    echo "<br>".min($dizi1);// dizideki min degeri gösterir
    echo "<br>".in_array(56,$dizi1);// 56 degeri dizide varmı yokmu onu gösterir. eger varsa ekranda bir yazar, eger yoksa hiçbir şey yazmaz.

$dizi2=array("Barış","KURT","Yazılımcı");
    print_r($dizi2);
    echo "<br>".implode(" ",$dizi2);

echo"<br><br>";

$a="benim adım barış kurt";
echo strlen(utf8_decode($a));

echo"<br><br>";

//Bir dizgenin harflerini küçük harfe çevirir.
$orn="GULdane  AKsu";
echo strtolower($orn);

echo"<br><br>";

// Bir dizgenin harflerini büyük harfe çevirir.
$orn="Bana mASAl anlATMA";
$orn=strtoupper($orn);
echo $orn;

echo"<br><br>";

/*String ifadelerde kullanılan ve alt satıra geçmeyi sağlayan 
\n yerine kaynak kodda <br> yazmak için kullanılır.*/
$ifade="Ben  iyiyim\nBende öyle\nHavalar burda güzel\nBurdada aynı\n";
echo $ifade."<br><br>",
     nl2br($ifade);

echo"<br><br>";

$cümle="adana Çukurova Üniversitesi";
print(ucfirst($cümle)."<br>"); // metnin ilk karakterini büyük yapar a, büyük A oluyor

echo"<br><br>";

// her cümlenin ilk harfini büyük yapar.
$kelime="kahramanmaraş sütçü imam üniversitesi";
echo ucwords($kelime),"<br>"; 
?>