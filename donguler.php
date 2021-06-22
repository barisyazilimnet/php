<?php
$sayi=0;
$toplam=0;
while ($sayi<11){
    echo"<br>Sayılar: ".$sayi;
    echo " Toplamı: ".$toplam=$sayi+$toplam;
    $sayi++;
}

echo"<br><br>";

for($i=1; $i<=10; $i++){
    echo $i.": For döngüsü<br>"; 
}
echo"<br><br>";
for($i=1; $i<=5; $i++){
    for($j=1; $j<=$i; $j++){
        echo"*";
    }
    echo"<br>";
}
for($i=5; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo"*";
    }
    echo"<br>";
}
for($i=2019; $i>=1990; $i--){
    echo "<br>Yıllar: ".$i;
}

echo"<br><br>";

$arttir=1;
do{
    echo "Temel Programlama<br>";
    $arttir+=1;
}while($arttir<10);

echo"<br><br>";

for($i=1; $i<=10; $i++){
    for($j=1; $j<=10; $j++){
        echo "$i x $j =".$i*$j,"<br>";
    }
    echo "<br>";
}

echo"<br><br>";

$say=0;
$tahmin=5;
$kazan=2;
do{
    $sayi=rand(1,5);
    echo $sayi,"<br>";
    $say++;   
    echo"<br>";
} while($sayi!=$tahmin);{
    echo "$sayi sayınız $say. denemede bulundu.","<br>";
    if($say<=$kazan){
        echo "Tebrikler $kazan. denemede tahmin ettiniz.";
    } else{
        echo "Kaybettiniz çünkü $kazan. denemede tahmin edemediniz.";
    }
}

echo"<br><br>";

for($i=10; $i>0; --$i){
    for($j=0; $j<10; ++$j)
        echo $i."<br>".$j;
}

echo"<br><br>";

for($i=10; $i>=10; $i--){
    echo $i."<br>";
}

echo"<br><br>";

for($i=0; $i<100; $i+=2){
    echo $i;
}
?>