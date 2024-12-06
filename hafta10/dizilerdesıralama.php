<?php

/*echo "<h3> dizilerde sıralama </h3>";
$iller=array(
    "ankara"=>6,
    "istanbul"=>34,
    "izmir"=>35,
    "balıkesir"=>10,
    "kocaeli"=>41,
    "kırklareli"=>39
);
echo "<h5> dizi elemanlarını anahtar değerlerini koruyarak küçükten büyüğe sıralama </h5>";
echo "<pre>";
asort($iller);
print_r($iller);
echo"</pre>";
echo "<h5> dizi elemanlarını anahtar değerlerini koruyarak büyükten küçüğe sıralama </h5>";
echo "<pre>";
arsort($iller);
print_r($iller);
echo"</pre>";*/




/*$sayi=array(
    "1"=>10,
    "2"=>30,
    "3"=>5,
    "4"=>85,
    "5"=>126,
);

echo"<h5> dizi elemanlarını küçükten büyüğe sıralama</h5>";
echo "<pre>";
rsort($sayi);
print_r($sayi);
echo"</pre>";


echo"<h5> dizi elemanlarını büyükten küçüğe sıralama</h5>";
echo "<pre>";
shuffle($sayi);
print_r($sayi);
echo"</pre>";

echo"<h5> dizi elemanlarını rastgele sıralama</h5>";
echo "<pre>";
shuffle($sayi);
print_r($sayi);
echo"</pre>";



echo"<h5> dizi elemanlarını indis değerlerine göre  büyükten küçüğe sıralama</h5>";
echo "<pre>";
ksort($sayi);
print_r($sayi);
echo"</pre>";



echo"<h5> dizi elemanlarını indis değerlerine göre küçükten büyüğe sıralama</h5>";
echo "<pre>";
ksort($sayi);
print_r($sayi);
echo"</pre>";*/



//dizi elemanlarını tersine çevirme

/*echo "<h3> dizi elemanlarını tersine çevirme </h3>";
$isim=array("çisem","tuğba","mehmet","aysun","bilal");
$ters_cevir=array_reverse($isim);
echo "ilk hali"."<br>";
echo "<pre>";
print_r($isim);
echo"</pre>";
echo "ters hali"."<br>";
print_r($ters_cevir);
echo "</pre";*/





//dizi sayıcıları

echo "<h3> dizi sayıcıları </h3>";
$sayi=array(6,2,4,1,1,3,5,6);
echo "eleman sayısı:".count($sayi)."<br>"."dizideki elemanlarının çarpım sonucu:".array_product($sayi)."<br>"."dizideki tekrar eden elemanlar:";
print_r(array_count_values($sayi));













?>