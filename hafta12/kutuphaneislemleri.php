<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekle Sil Güncelle</title>
</head>
<body>
    <form name="form" action="" method="post">
        <table>
            <tr>
                <td>TÜRÜ:</td>
                <td><input type="text" name="turu"></td>
            </tr>
            <tr>
                <td>ADI:</td>
                <td><input type="text" name="ad"></td>
            </tr>
            <tr>
                <td>YAZAR ADI:</td>
                <td><input type="next" name="yazarad"></td>
            </tr>
            <tr>
                <td>YAYINEVİ:</td>
                <td><input type="text" name="yayinevi"></td>
            </tr>
            <tr>
                <td>SAYFA SAYISI:</td>
                <td><input type="text" name="sayfasayisi"></td>
            </tr>
            <tr>
                <td>ÖZET:</td>
                <td><input type="text" name="ozet"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="kaydet" value="KAYDET">
                    <input type="submit" name="guncelle" value="GÜNCELLE">
                    <input type="submit" name="sil" value="SİL">

                </td>
            </tr>
        </table>
</body>
</html>

<?php
$db=new PDO("mysql:host=localhost; dbname=kutuphane; charset=utf8","root","");
if(isset($_POST["kaydet"]))
{
    $ktur=$_POST["turu"];
    $kadi=$_POST["ad"];
    $kyazaradi=$_POST["yazarad"];
    $kyayinevi=$_POST["yayinevi"];
    $ksayfasayisi=$_POST["sayfasayisi"];
    $kozet=$_POST["ozet"];
    if($db)
    {
        echo "Veritabanı bağlantısı gerçekleşti"."<br>";
        $kaydet=$db->exec("INSERT INTO durum(turu,adi,yazar_adi,yayinevi,sayfa_sayisi,ozet) VALUES('$ktur','$kadi','$kyazaradi','$kyayinevi','$ksayfasayisi','$kozet')");
        if($kaydet)
        {
            echo "Kayıt ekleme başarılı";
        }
        else
        {
            echo"kayıt ekleme başarısız";
        }
    }
}

if(isset($_POST["guncelle"])) {
    $ktur=$_POST["turu"];
    $kadi=$_POST["ad"];
    $kyazaradi=$_POST["yazarad"];
    $kyayinevi=$_POST["yayinevi"];
    $ksayfasayisi=$_POST["sayfasayisi"];
    $kozet=$_POST["ozet"];
    if($db){
        echo "Veri tabanı bağlantısı gerçekleştirildi"."<br>";
        $guncelle=$db->exec("UPDATE durum SET turu='$ktur',soyad='$kyazaradi',soyad='$kyayinevi',soyad='$ksayfasayisi',soyad='$kozet' WHERE tc='$kadi'");
    if($guncelle){
        echo "Güncelleme tamamlandı";
    }
    else {
        echo "Güncelleme tamamlanamadı";
    }
}
}


if(isset($_POST["sil"])) {
    $ktur=$_POST["turu"];
    $kadi=$_POST["ad"];
    $kyazaradi=$_POST["yazarad"];
    $kyayinevi=$_POST["yayinevi"];
    $ksayfasayisi=$_POST["sayfasayisi"];
    $kozet=$_POST["ozet"];
    if($db){
        echo "Veri tabanı bağlantısı gerçekleştirildi"."<br>";
        $sil=$db->exec("DELETE FROM durum WHERE ad='$kadi'");
    if($sil){
        echo "Silme tamamlandı";
    }
    else {
        echo "Silme tamamlanamadı";
    }
}
}




?>
