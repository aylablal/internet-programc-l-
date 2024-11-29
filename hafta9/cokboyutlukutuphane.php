<?php

$kutuphane=[
    [
    "kitabın adı:"=>"nutuk",
    "kitabın yazarı:"=>"MUSTAFA KEMAL ATATÜRK",
    "yayınevi"=>"yapı kredi yayınları"
],
[
    "kitabın adı:"=>"küçük prens",
    "kitabın yazarı:"=>"antoine de saint-exupery",
    "yayınevi"=>"can çocuk yayınları"
]
];
foreach($kutuphane as $kitap)
{
    foreach($kitap as $anahtar=>$deger)
    {
        echo $anahtar."-".$deger."<br>";
    }
}


?>