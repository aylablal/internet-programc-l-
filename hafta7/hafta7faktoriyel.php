<html>
    <head>
        <meta charset="UTF-8">
        <title>FAKTÖRİYEL</title>
    </head>
    <Body>
        <form name="form" action="" method="post">
            sayı giriniz:
            <input type="text" name="sayi">
            <input type="submit" name="gonder" value="gönder">
        </form>
    </Body>
</html>

<?php

if (isset($_POST["gonder"]))
{
    $ksayi=$_POST["sayi"];
    if($ksayi<0)
    {
        echo "negatif sayıların faktöriyeli bulunmaz"."<br>";
    }
    else
    {
        $faktoriyel=1;
        for($i=1;$i<=$ksayi;$i++)
        {
            $faktoriyel=$faktoriyel*$i;
        }
        echo $ksayi. "sayısının faktöriyeli:" .$faktoriyel;
    }
}
?>