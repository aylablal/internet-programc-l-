<?php
include "hafta11veribaglanti.php";
$kayit=$db->exec("INSERT INTO deneme SET id='10',ad='mehmet',soyad='atıcı'");
if($kayit)
{
    echo "kayıt gerçekleştirildi. ID değeri:".$db->LastInsertId();
}
?>