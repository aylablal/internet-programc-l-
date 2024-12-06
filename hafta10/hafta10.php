<?php

//dizilerde ekle çıkar fonksiyonları

/*echo "Array_unshift() kullanımı"."<br>";
$diller=array("PHP","C#");
array_unshift($diller,"javascript","pyhton");
print_r($diller);
echo "Array_shift() kullanımı"."<br>";
array_shift($diller);
print_r($diller);
echo "<h3>Array_push() kullanımı </h3>";
array_push($diller,"Vue","Laravel");
print_r($diller);
echo "<h3> Array_pop Kullanımı </h3>";
array_pop($diller);
print_r($diller);
echo"<h3> Unset kullanımı </h3>";
unset($diller["2"]);
print_r($diller);*/



//dizi birleştirme

/*echo "<h3> dizi elemanlarını birleştirme </h3>";
$marmara_bolge=array("balıkesir","istanbul","bursa");
$ege_bolge=array("izmir","manisa","aydın");
$tum_iller=array_merge($marmara_bolge,$ege_bolge);
echo"<pre>";
print_r($tum_iller);
echo"</pre>";*/


//dizideki ortak elemanı bulma

/*echo"<h3> dizideki ortak eleman </h3>";
$dizi=array("araba","kalem","ev");
$dizi2=array("araba","kalem","masa");
$dizi3=array("masa","araba","sandalye");
$dizi4=array("masa","kalem","araba");
$ortak_bul=array_intersect($dizi,$dizi2,$dizi3,$dizi4);
echo "<pre>";
print_r($ortak_bul);
echo"</pre>";*/




//dizi elemanlarını tek seferde çıktı alma

/*echo "<h3> implode kullanımı </h3>";
$programlamadilleri=array("PHP","HTML","CSS","JAVASCRİPT");
$duzenle=implode("|",$programlamadilleri);
echo $duzenle;*/


//dizi elemanlarından rastgele seçim

/*echo "<h3> diziden rastgele eleman seçme </h3>";
$sehir=array("balıkesir","istanbul","izmir","van","erzurum","muğla");
$rastgele=array_rand($sehir);
echo $sehir[$rastgele];*/
























?>