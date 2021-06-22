<?php
$toplam="";

$sayi_1=$_GET["sayi1"];
$sayi_2=$_GET["sayi2"];
@$toplam=$sayi_1+$sayi_2;

if($toplam!=""){
    echo "İki  sayının toplamı :".$toplam;
}else {
    echo"herhangi  bir sayı girmediniz";
}
?>
