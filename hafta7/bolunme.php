<html>
    <head>
        <meta charset="UTF-8">
        <title>ÜÇE VE BEŞE BÖLÜNME</title>
    </head>
    <body>
    <form name="form" action="" method="post">
    <table>
        <tr>
            <td>1. sayıyı giriniz:</td>
            <td><input type="text" name="sayi1"></td>
        </tr>
        <tr>
            <td>2. sayıyı giriniz:</td>
            <td><input type="text" name="sayi2"></td>
        </tr>
        <tr>
            <td>Seçim yapınız:</td>
            <td>
                <select name="secim">
                    <option value="ucebolunme">İki sayı arasında 3'e bölünen sayılar</option>
                    <option value="besebolunme">İki sayı arasında 5'e bölünen sayılar</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="gonder" value="Gönder">
            </td>
        </tr>
    </table>
</form>

    </body>
</html>


<?php

if(isset($_POST["gonder"])) {
    $ksayi1 = $_POST["sayi1"];
    $ksayi2 = $_POST["sayi2"];
    $ksecim = $_POST["secim"];

    
    if($ksayi1 > $ksayi2) {
        $enb = $ksayi1;
        $enk = $ksayi2;
    } else {
        $enb = $ksayi2;
        $enk = $ksayi1;
    }

    switch($ksecim) {
        case "ucebolunme":
            
            for($i = $enk; $i <= $enb; $i++) {
                if($i % 3 == 0) {
                    echo "3'e bölünen sayılar: " . $i . "<br>";
                }
            }
            break;

        case "besebolunme":
           
            for($i = $enk; $i <= $enb; $i++) {
                if($i % 5 == 0) {
                    echo "5'e bölünen sayılar: " . $i . "<br>";
                }
            }
            break;

        default:
            echo "Geçersiz seçim.";
    }
}
?>
