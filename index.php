<?php
//döngüler

//1'den 10'a kadar sayıları while ödngüsü ile ekrana yazdırma

//while döngüsü ile koşul belirtiriz

//her seferinde bu koşul sağlanana kadar döngü çalışır 


/*$sayi =1;
while($sayi<10)
{
    echo "sayi:" .$sayi. "<br>";
       $sayi++;
}*/




//1'den 10'a kadar olan sayıların toplamı



/*$sayi =1;
echo $sayi;
$toplam=$sayi;
while($sayi<10)
{
    $sayi++;
    $toplam+=$sayi;
    echo "+" . $sayi;

}
echo "=" . $toplam;*/




#do-while döngüsü diğer döngülerden farklı ılarak koşul ifadesi döngünün sonunda kontrol edilir do-while ne olursa olsun bir kere çalışır.#

//do-while döngüsü ile ekrana 5 kere isim yazdırma uygulaması

/*$sayi =1;
do{
    echo $sayi. "- ayla bilal" . "<br>";
    $sayi++;
}
while($sayi<=5);*/



//30 sayısının bölenlerini do-while döngüsü kullanarak yazınız//

/*$sayi = 30;
$a=1;
do{
    if($sayi%$a==0)
    {
        echo $a. "sayısı" .$sayi. "sayısının bir bölenidir."."<br>";
    }
    $a++;
}
while($a<=$sayi);*/


//haftanın günlerini diziye aktarma ve foreach döngüsü//


//foreach sadece dizilerde kullanılır dikkat et//

/*$gunler=array("pazartesi","salı" , "çarşamba" ,"perşembe", "cuma" ,  "cumartesi" ,"pazar");
foreach($gunler as $gun)
{
    echo $gun. "<br>";
}*/

//alfabedeki kalın ve ince ünlü harfleri foreach döngüsünde yazdırma//

 

/*$KalinVeİnceUnluler=array("a","ı","o","u","e","i","ö","ü");
echo "alfabedeki kalın ve ince ünlüler listesi" . "<br>";
foreach($KalinVeİnceUnluler as $alfabe=>$sira)
{
    echo $alfabe. ":" .$sira. "<br>";
}*/



// for döngüsü forda 3 aşamadan oluşur//

/*for ($i=0;$i<=10;$i++)
{
    echo "<b> gelişim üniversitesi</b>
    <u> web tasarımı ve kodlama programı </u>"."<br>";
}*/




















?>
