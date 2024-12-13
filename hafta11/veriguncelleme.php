<?php

include "hafta11veribaglanti.php";
$guncelle=$db->exec("UPDATE deneme SET adi='irem' WHERE soyad='aslan2'");
if($guncelle)
{
    echo "güncelleme başarılı";
}
else{
    echo "güncelleme başarısız";
}

//veritabanında prepare ile veri güncelleme
$sorgu=$db->prepare("UPDATE deneme SET
ad=?
soyad=?
");
$guncelle=$sorgu->execute(array("ayla","nurgül"));
if($guncelle)
{
    echo "güncelleme başarılı";
}
else
{
    echo "güncelleme başarısız";
}





?>