
<?php
/*$ad ="ayla";
$soyad ="bilal";
echo $ad."".$soyad;*/
?>

<?php
//gettype uygulama
/*$degisken=true;
$degisken2=3;
$degisken3=5.6;
$degisken4="ayla";
//$degisken5=array("red","blue","yellow");
//$degisken6=new std Class;
$degisken7=NULL;
$degisken8="30";
echo gettype($degisken)."<br>".
    gettype($degisken2)."<br>".
    gettype($degisken3)."<br>".
    gettype($degisken4)."<br>".
    //gettype($degisken5)."<br>".
    //gettype($degisken6)."<br>".
    gettype($degisken7)."<br>".
    gettype($degisken8)*/
?>




<?php
/*$sayi=55;
echo "<b>Birinci degiskenin adi:
\$sayi</b>"."<br>".
    "Degeri:".$sayi."<br>".
    "Türü:".gettype($sayi)."<br>";
?>

<?php
$adi="Ayla";
echo "<b>İkinci degiskenin adi:
\$adi</b>"."<br>".
    "Degeri:".$adi."<br>".
    "Türü:".gettype($adi)."<br>";
?>

<?php
$ondalik=5.1234;
echo "<b>üçüncü degiskenin adi:
\$ondalik</b>"."<br>".
    "Degeri:".$ondalik."<br>".
    "Türü:".gettype($ondalik)."<br>";*/
?>

<?php
/*$a="32";
settype($a,"integer");
var_dump($a);
echo gettype($a)."<br>";*/
?>

<?php
/*$b=32;
settype($b,"string");
var_dump($b);
echo gettype($b)."<br>";*/
?>

<?php
/*$c=true;
settype($c,"integer");
var_dump($c);
echo gettype($c)."<br>";*/
?>


<?php
//php sabitleri

echo "<h2> PHP SABİTLERİ</h2>"."<br>".
    "kodun bulundugu yer:". (__LINE__)."<br>".
    "dosyanın bulundugu yer:" . (__FILE__)."
    <br>".
    "sunucudaki PHP versiyonu:
    ". phpversion(). "<br>".  
    "sunucudaki işletim sistemi: " . (PHP_OS)."
    <br>". 
    "dosyanın bulunduğu dizin :" . (__DIR__);