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
                <td>Tc Numarası:</td>
                <td><input type="text" name="tc"></td>
            </tr>
            <tr>
                <td>ADI:</td>
                <td><input type="text" name="ad"></td>
            </tr>
            <tr>
                <td>SOYADI:</td>
                <td><input type="next" name="soyad"></td>
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
$db=new PDO("mysql:host=localhost; dbname=ornek; charset=utf8","root","");
if(isset($_POST["kaydet"]))
{
    $ktc=$_POST["tc"];
    $kadi=$_POST["ad"];
    $ksoyad=$_POST["soyad"];
    if($db)
    {
        echo "Veritabanı bağlantısı gerçekleşti"."<br>";
        $kaydet=$db->exec("INSERT INTO ogrencidurum(ad,soyad,tc) VALUES('$kadi','$ksoyad','$ktc')");
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

if(isset($_POST["guncelle"]))
{
    $ktc=$_POST["tc"];
    $kadi=$_POST["ad"];
    $ksoyadi=$_POST["soyad"];
    if($db)
    {
        echo "Veritabanı bağlantısı gerçekleşti"."<br>";
        $guncelle=$db->exec("UPDATE ogrencidurum SET ad='$kadi',soyad='$ksoyadi' WHERE tc='$ktc'");
        if($guncelle)
        {
            echo "Güncelleme başarılı";
        }
        else
        {
            echo "Güncelleme başarısız";
        }
    }
}

if(isset($_POST["sil"]))
{
    $ktc=$_POST["tc"];
    $kadi=$_POST["ad"];
    $ksoyadi=$_POST["soyad"];
    if($db)
    {
        echo "Veritabanı bağlantısı gerçekleşti"."<br>";
        $sil=$db->exec("DELETE FROM ogrencidurum WHERE ad='$kadi'");
        if($sil)
        {
            echo "Silme başarılı";
        }
        else
        {
            echo "Silme başarısız";
        }
    }
}



?>
