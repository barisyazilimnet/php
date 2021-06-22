<?php
$sayi=15;
if($sayi>12){
    echo"<b>Sayı 10'dan büyüktür. Girilen sayı:</b>".$sayi;
}
echo"<br><br>";

$boy=174;
$kilo=85;
if($boy>178 && $kilo>75 && $kilo<90){
    echo"<b>Basketbol elemelerine katılabilir</b>";
}
echo"<br><br>";

$kisiler=array(
    "Ahmet"=>array("boy"=>180,"kilo"=>76),
    "Barış"=>array("boy"=>160,"kilo"=>80),
    "Semih"=>array("boy"=>170,"kilo"=>85)
);
if($kisiler["Ahmet"]["boy"]>178 && $kisiler["Ahmet"]["kilo"]>75 && $kisiler["Ahmet"]["kilo"]<90){
    echo"<b>Basketbol elemelerine katılabilir</b>";
}

echo"<br><br>";

$kisiler=array(
    "Ahmet"=>array("boy"=>118,"kilo"=>76),
    "Barış"=>array("boy"=>160,"kilo"=>80),
    "Semih"=>array("boy"=>170,"kilo"=>85)
);
echo $kisiler["Ahmet"]["boy"],
    "<br>", $kisiler["Ahmet"]["kilo"];
if($kisiler["Ahmet"]["boy"]>178 && $kisiler["Ahmet"]["kilo"]>75 && $kisiler["Ahmet"]["kilo"]<90){
    echo"<br><b>Basketbol elemelerine katılabilir</b>";
} else{
    echo"<br><b>Öğrenci şartları sağlanmadığı için elemelere giremez</b>";
}

echo"<br><br>";

$baris=0;
$baris1=5;
if($baris!=0){
    echo "evet dogru";
}else if($baris1==5){
    echo "birtanesi dogru olabilir";
} else {
    echo "yanlış";
}

echo"<br><br>";

$kitaplar=array("fiyat"=>array(90,70,85,62,52));
$toplamF=$kitaplar["fiyat"][0]+$kitaplar["fiyat"][1]+$kitaplar["fiyat"][0];

echo "toplam  fiyat: ".$toplamF;
echo "<br>"; 

if($toplamF>100 && $toplamF<200){
    $toplamF=$toplamF-($toplamF/100)*5;
        echo "%5 indirim kazandınız!:".$toplamF;
}
    else if($toplamF>200){
        $toplamF=$toplamF -($toplamF/100)*10;
        echo "%10 indirim kazandınız!:".$toplamF;
    }
    else{
        echo $toplamF;
    }

echo"<br><br>";

$kitaplar=array(
    "fiyatlar"=>array(15,50,10,55,35,30,40,20,47,13)
);
$toplam_fiyat=$kitaplar["fiyatlar"][0]+$kitaplar["fiyatlar"][1]+$kitaplar["fiyatlar"][6];
echo"<b>Kullanıcının aldığı kitapların toplam fiyatı :</b>".$toplam_fiyat; 

/*Bu kullanıcının aldığı kitapların 
toplam fiyatı 100 ile 200 arasında 
olduğu için %5 indirimden yararlanıcaktır*/

if($toplam_fiyat>100 && $toplam_fiyat<200){
    $indirim=$toplam_fiyat-($toplam_fiyat/100)*5;
    echo "<br><b>%5 indirim yapıldıktan sonraki fiyat :</b>".$indirim;
} elseif ($toplam_fiyat>200){
    $indirim=$toplam_fiyat-($toplam_fiyat/100)*10;
    echo"<br><b>%10 indirim yapıldıktan sonraki fiyat :</b>".$indirim;
} else {
    echo"<br><b>İndirimsiz fiyat :</b>".$toplam_fiyat;
}
echo"<br><br><br>";

$toplam_fiyat2=$kitaplar["fiyatlar"][0]+$kitaplar["fiyatlar"][1]+$kitaplar["fiyatlar"][4]+$kitaplar["fiyatlar"][5]+$kitaplar["fiyatlar"][6]+$kitaplar["fiyatlar"][7]+$kitaplar["fiyatlar"][8];
echo "<b>Kullanıcının aldığı kitapların toplam fiyatı :</b>".$toplam_fiyat2;

/*Bu kullanıcının aldığı kitapların 
toplam fiyatı 200 fazla  
olduğu için %10 indirimden yararlanıcaktır*/

if($toplam_fiyat2>100 && $toplam_fiyat2<200){
    $indirim=$toplam_fiyat2-($toplam_fiyat2/100)*5;
    echo "<br><b>%5 indirim yapıldıktan sonraki fiyat :</b>".$indirim;
} elseif ($toplam_fiyat2>200){
    $indirim=$toplam_fiyat2-($toplam_fiyat2/100)*10;
    echo"<br><b>%10 indirim yapıldıktan sonraki fiyat :</b>".$indirim;
} else {
    echo"<br><b>İndirimsiz fiyat :</b>".$toplam_fiyat2;
}
echo"<br><br><br>";

$toplam_fiyat3=$kitaplar["fiyatlar"][0]+$kitaplar["fiyatlar"][1]+$kitaplar["fiyatlar"][2];
echo"<b>Kullanıcının aldığı kitapların toplam fiyatı :</b>".$toplam_fiyat3;

/*Bu kullanıcının aldığı kitapların 
toplam fiyatı 100'den az olduğu 
için indirimden  yararlanamıcaktır*/

if($toplam_fiyat3>100 && $toplam_fiyat3<200){
    $indirim=$toplam_fiyat3-($toplam_fiyat3/100)*5;
    echo "<br><b>%5 indirim yapıldıktan sonraki fiyat :</b>".$indirim;
} elseif ($toplam_fiyat3>200){
    $indirim=$toplam_fiyat3-($toplam_fiyat3/100)*10;
    echo"<br><b>%10 indirim yapıldıktan sonraki fiyat :</b>".$indirim;
} else {
    echo"<br><b>İndirimsiz fiyat :</b>".$toplam_fiyat3;
}
?>